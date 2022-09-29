<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', [PageController::class, 'dashboard'])->name('Dashboard');

//Route Pesanan
Route::resource('pesanan', PesananController::class);

//Route Pembeli
Route::resource('pembeli', PembeliController::class);

//Route Produk
Route::resource('produk', ProdukController::class);

//Route Produk
Route::resource('supplier', SupplierController::class);