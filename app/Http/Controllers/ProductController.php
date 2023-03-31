<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function getProducts(){
        $products = Product::where('estado', 1)
        ->addSelect(['categoria' => Category::select('nombre')->whereColumn('category_id', 'id')])
        ->get();
        
        return response()->json($products,200);
    }
    public function postProduct(Request $request){ 
        $product=Product::create($request->all());
        
        return response($product,201);
    }

    public function deleteProduct($id){

        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
        $product->delete();
        return response( ['Producto eliminado'], 203);
    }

    public function getProductById($id){
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
        return response()->json($product, 200);

    }
    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
        $product -> update($request->all());
        return response()->json($product, 200);
    }

    
}
