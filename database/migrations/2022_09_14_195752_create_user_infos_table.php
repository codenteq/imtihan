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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('phone',300)->nullable();
            $table->string('address',600)->nullable();
            $table->boolean('status')->default(1);
            $table->foreignId('period_id')->nullable();
            $table->foreignId('month_id')->nullable();
            $table->foreignId('group_id')->nullable();
            $table->foreignId('language_id')->default(1);
            $table->foreignId('company_id')->nullable();
            $table->foreignId('user_id')->nullable();
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
        Schema::dropIfExists('user_infos');
    }
};
