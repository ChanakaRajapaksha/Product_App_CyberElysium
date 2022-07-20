<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

//Home
Route::get('/', [HomeController::class, "index"])->name('home');

//Product
Route::prefix('/product')->group(function () {
    Route::get('/', [ProductController::class, "index"])->name('product');
    Route::post('/store', [ProductController::class, "store"])->name('product.store');
});
