<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/products', [MainController::class, 'indexProducts'])->name('products.index');
Route::get('/products/create', [MainController::class, 'create'])->name('products.create');
Route::post('/products/store', [MainController::class, 'store'])->name('products.store');
