<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create time stamp
        $timestamp = date('Y-m-d H:i:s');

        //insert three categories
        DB::table('categories')->insert([
                'category_name' => 'Coffee',
                'created_at' => $timestamp
            ]);
            DB::table('categories')->insert([
                'category_name' => 'Tea',
                'created_at' => $timestamp
            ]);
            DB::table('categories')->insert([
                'category_name' => 'Muffins',
                'created_at' => $timestamp
            ]);
            DB::table('categories')->insert([
                'category_name' => 'Donuts',
                'created_at' => $timestamp
            ]);

    }
}
