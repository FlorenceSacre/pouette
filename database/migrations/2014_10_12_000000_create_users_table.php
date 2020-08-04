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
            $table->bigIncrements('id')->unique(); //primary key
            $table->string('name');
            $table->string('street');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin')->default(0);
            $table->enum('role',['customer', 'subscriber']);
            $table->rememberToken();
            $table->timestamps(); //create_at et update_at
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
