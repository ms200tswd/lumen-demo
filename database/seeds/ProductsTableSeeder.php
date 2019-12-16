<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');

        //Insert 2 coffee products in the products table
        DB::table('products')->insert([
            'category_id' => 1,
            'product_name' => 'Espresso',
            'description' => 'Deep and robust, our espresso blends are carefully created to give each one a unique flavour.',
            'list_price' => '2.90',
            'created_at'=>$timestamp
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'product_name' => 'Dark Brown Roast',
            'description' => 'Exceptional beans shade grown by the Fiallos family of Nicaragua.  Well balanced, fruity and sweet with beautiful aroma.',
            'list_price' => '2.25',
            'created_at'=>$timestamp
        ]);
        //Insert 2 tea products in the products table
        DB::table('products')->insert([
            'category_id' => 2,
            'product_name' => 'Loose Leaf Steeped Tea',
            'description' => 'Our unique Steeped process gently coaxes out the flavor of our loose-leaf Orange Pekoe Tea, for a consistent, great tasting cupt of Tea every time.',
            'list_price' => '2.05',
            'created_at'=>$timestamp
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'product_name' => 'Herbal Tea',
            'description' => 'Relax with a soothing cup of caffeine-free herbal tea. Available in a variety of flavours.',
            'list_price' => '1.95',
            'created_at'=>$timestamp
        ]);
    }
}
