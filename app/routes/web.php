<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/products',[productController::class,'index'])->middleware('checkloggedin');

route::get('/products/addNewProduct',[productController::class,'create'])->name('createNewProduct');
route::post('/products',[productController::class,'store']);

route::get('/products/login',function(){
    return view('login');
});
route::get('/products/register',function(){
    return view('signUp');
});
route::post('/products/login',[userController::class,'check']);
route::post('/products/register',[userController::class,'signUp']);
route::get('/products/signout',[userController::class,'signout']);