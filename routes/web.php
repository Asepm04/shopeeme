<?php

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
    return view('home');
});

// Route::get('/login', function () {
//     return view('admin.adminLogin');
// });

// Route::get('/regis', function () {
//     return view('admin.adminRegister');
// });

Route::get('/testinput',[App\Http\Controllers\ProductController::class,'input']);
Route::get('/update/{id}',[App\Http\Controllers\ProductController::class,'update']);
Route::controller(\App\Http\Controllers\AdminController::class)->group(function()
{
    Route::get('/login','login');
    Route::get('/register','register');
    Route::post('/syslogin','syslog');
});


Route::controller(\App\Http\Controllers\UserController::class)->group(function()
{
    Route::post('/add','AddUser');
    Route::post('/uploadfile','uploadgambar');
});


Route::controller(\App\Http\Controllers\ProductController::class)->group(function()
{
    Route::get('/add/product',function(){return view('product.form_product');});
    Route::post('/proses/product','adProduct');
    Route::get('/product','getData');
});


Route::get('/ad',function(){ return view('admin.adminRegister');});
Route::get('/uploadgambar',function(){return view('admin.formProduct');});
