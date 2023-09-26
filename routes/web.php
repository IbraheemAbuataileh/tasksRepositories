<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\MerchantsController;
use App\Http\Controllers\SomeController;


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

Route::get('/', [homeController::class,"homepage"] );
Route::get('/', [SomeController::class, 'showHomepage']);
Route::get('/least-ordered-products-per-day', [ProductsController::class, 'getLeastOrderedProducts']);

