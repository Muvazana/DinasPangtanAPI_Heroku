<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->text('image')->nullable();
            $table->string('password');
            $table->string('role', 20);
            $table->string('api_token')->nullable();
            $table->string('ver_token', 6)->nullable();
            $table->string('device')->nullable();
            $table->string('status', 20)->default("unverified")->nullable();
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
        Schema::dropIfExists('tb_users');
    }
}
