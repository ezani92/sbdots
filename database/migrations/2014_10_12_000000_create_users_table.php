<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role')->default(3);
            $table->string('phone');
            $table->integer('phone_verification')->default(0);
            $table->string('tac_send_at')->nullable();
            $table->string('tac_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->integer('sms_service')->nullable();
            $table->integer('is_ban')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
