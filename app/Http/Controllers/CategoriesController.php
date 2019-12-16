<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // CRUD
    // create
    // read
    // update
    // delete
    protected $category;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this ->category = $category;
        //
    }

    //

    public function getAllCategories(){
        $categories = $this -> category -> all();

        return $categories;
    }

    public function getCategory($id){
        $category = $this -> category -> find($id);
        if(empty($category)){
            return response() -> json(['message' => "category: $id not found!"],404);
        }
        return $category;
    }
}
