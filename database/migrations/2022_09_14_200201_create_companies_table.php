<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subdomain');
            $table->boolean('status')->default(1);
            $table->string('tax_id',11);
            $table->string('email');
            $table->string('web_url')->nullable();
            $table->string('phone');
            $table->foreignId('country_id');
            $table->foreignId('city_id');
            $table->foreignId('state_id');
            $table->string('address',600);
            $table->string('zip_code');
            $table->string('logo')->default('/companies/default.png');
            $table->foreignId('plan_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
