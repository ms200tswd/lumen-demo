<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // CRUD
    // create
    // read
    // update
    // delete
    protected $product;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this ->product = $product;
        //
    }

    //

    public function getAllProducts(){
        $products = $this -> product -> all();

        return $products;
    }

    public function getProduct($id){
        $product = $this -> product -> find($id);
        if(empty($product)){
            return response() -> json(['message' => "product: $id not found!"],404);
        }
        return $product;
    }
}
