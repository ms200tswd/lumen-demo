<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; //leo edit: hash password

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create user
        $timestamp = date('Y-m-d H:i:s');

        // insert one user
        DB::table('users')->insert([
            'first_name' => 'leo',
            'last_name' => 'liu',
            'email' => 'ms200tswd@gmail.com',
            'password' => Hash::make('0ulton!@#$'),
            'created_at' => $timestamp
        ]);

    }
}
