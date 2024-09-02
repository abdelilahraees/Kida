<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $products=\App\Models\Product::all();
    return view('welcome',compact("products"));
})->name("welcome");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']);
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware(['auth'])->name('products');
Route::resource("/products",\App\Http\Controllers\ProductController::class)->middleware(['auth']);
Route::resource("/commands",\App\Http\Controllers\CommandController::class);
