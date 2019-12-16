<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            // leo edit add columns
            $table->unsignedBigInteger('category_id'); // fk to categories
            $table->string('product_name', 150);
            $table->text('description');
            $table->unsignedDecimal('list_price',8,2);
            $table->unsignedDecimal('discount_percent',5,2)->default(0.00); //default value with 0.00

            // foreign key
            $table->foreign('category_id')->references('id')->on('categories');


            // end

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
        Schema::dropIfExists('products');
    }
}
