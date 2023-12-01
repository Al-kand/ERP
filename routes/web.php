<?php

use App\Http\Controllers\ProductController;
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
//     return view('main');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/edit', function () {
    return view('products.edit');
});

Route::get('/show', function () {
    return view('products.show');
});
