<?php

namespace Tests\Feature\User\Support;

use App\Models\Company;
use App\Models\Support;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class SupportControllerTest extends TestCase
{
    use RefreshDatabase;

    protected string $apiUrl = '/api/user/supports/';

    public function test_support_list()
    {
        $company = Company::factory()->create();
        $user = User::factory()->state(['role' => User::Normal])->create();
        UserInfo::factory()->state(['user_id' => $user->id, 'company_id' => $company->id])->create();
        Support::factory(20)->state(['company_id' => $company->id, 'user_id' => $user->id])->create();

        Sanctum::actingAs($user, ['user.support.list']);

        $response = $this->get($this->apiUrl);

        $response->assertJsonStructure(['success', 'message', 'data'])
            ->assertJsonCount(20, 'data');
    }

    public function test_support_create()
    {
        $company = Company::factory()->create();
        $user = User::factory()->state(['role' => User::Normal])->create();
        UserInfo::factory()->state(['user_id' => $user->id, 'company_id' => $company->id])->create();
        $support = Support::factory()->make();

        Sanctum::actingAs($user, ['user.support.create']);

        $response = $this->postJson($this->apiUrl, $support->toArray());
        $response->assertStatus(201);
    }
}