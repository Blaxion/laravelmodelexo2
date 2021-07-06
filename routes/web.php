<?php

use App\Http\Controllers\AboutsectionController;
use App\Http\Controllers\HomesectionController;
use App\Http\Controllers\ProductsectionController;
use App\Http\Controllers\StoreController;

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

Route::get('/',[HomesectionController::class,'home'])->name('home');
Route::get('/about',[AboutsectionController::class,'about'])->name('about');
Route::get('/products',[ProductsectionController::class,'products'])->name('products');
Route::get('/store',[StoreController::class,'store'])->name('store');
