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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name')->nullable();
            $table->boolean('email_verified_at')->default(false);
            $table->string('about')->nullable();
            $table->string('type')->nullable();
            $table->string('github')->nullable();
            $table->string('city')->nullable();
            $table->boolean('is_finished')->default(false);
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->foreignId('position_id')->nullable();
            $table->dateTime('adopted_at')->nullable();
            $table->string('telegram')->nullable();

            $table->string('remember_token')->nullable();
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
