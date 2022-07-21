<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
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

//View Product
Route::prefix('/view')->group(function () {
    Route::get('/', [ViewController::class, "view"])->name('view');
    Route::get('/{post_id}/delete', [ViewController::class, "delete"])->name('product.delete');
});


