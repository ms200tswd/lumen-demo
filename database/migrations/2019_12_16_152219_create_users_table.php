<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * https://laravel.com/docs/6.x/migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); //big int auto increment

            // leo edit: add custom table columns
            $table->string('first_name'); //varchar(255)
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            // end custom table

            $table->timestamps(); //create_at updated_at
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
