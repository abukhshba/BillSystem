<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RecieptController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>"admin/user"],function(){

    Route::get("/",[UserController::class,"index"]);
    Route::get("/create",[UserController::class,"create"]);
    Route::post("/store",[UserController::class,"store"]);
    Route::get("/delete/{id}",[UserController::class,"destroy"]);


});
//"middleware"=>"auth"
Route::group(['prefix'=>"admin/product"],function(){

    Route::get("/",[ProductController::class,"index"]);
    Route::get("/create",[ProductController::class,"create"]);
    Route::post("/store",[ProductController::class,"store"]);
    Route::get("/delete/{id}",[ProductController::class,"destroy"]);


});
Route::group(['prefix'=>"admin/bill"],function(){

    Route::get("/",[BillController::class,"index"]);
    Route::get("/create",[BillController::class,"create"]);
    Route::post("/store",[BillController::class,"store"]);


});