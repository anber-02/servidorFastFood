<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        return response()->json(Category::all(), 200);
    }
    public function postCategory(Request $request){
        $category = Category::create($request->all());
        return response($category, 201);
    }

    public function deleteCategory(){
        
    }
}
