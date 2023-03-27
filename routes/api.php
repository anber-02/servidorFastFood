<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categorias', [CategoryController::class, 'getCategory']);
Route::post('nuevaCategoria', [CategoryController::class, 'postCategory']);

//Rutas para Productos
Route::get('products',[ProductController::class,'getProducts']);
Route::post('nuevoProducto',[ProductController::class,'postProduct']);
Route::delete('product/{id}', [ProductController::class], 'deleteProduct');