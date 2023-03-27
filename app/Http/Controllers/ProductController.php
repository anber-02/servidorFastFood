<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function getProducts(){
        return response()->json(Product::all(),200);
    }
    public function postProduct(Request $request){ 
        $product=Product::create($request->all());
        
        return response($product,201);
    }

    public function deleteProduct($id){
        $product = Product::destroy($id);
        return response( ['Producto eliminado'], 203);
    }

    
}
