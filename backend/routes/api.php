<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/users", [UserController::class,"index"]); 
Route::get("/users/products_user", [UserController::class, "products_user"]);
Route::get("/products", [ProductsController::class,"index"]); 
Route::post("/users", [UserController::class, "insert"]);
Route::post("/login", [AuthController::class, "login"]);
