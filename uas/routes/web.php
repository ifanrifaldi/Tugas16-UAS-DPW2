<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'showIndex']);


Route::prefix('client')->group(function () {
    Route::get('index', [HomeController::class, 'showIndex']);
    Route::get('shop', [HomeController::class, 'showShop']);
    Route::get('contact', [HomeController::class, 'showContact']);

    Route::post('produk/filter2', [ProdukController::class, 'filter2']);


    Route::get('/', [CLientProdukController::class, 'index']);
    Route::get('detail/{produk}', [ClientProdukController::class, 'show']);
    Route::get('product', [ClientProdukController::class, 'prod']);
    Route::get('seller', [CLientProdukController::class, 'seller']);

    // Route::get('checkout' , [HomeController::class, 'showCheckout']);
    // Route::get('{produk}/checkout', [HomeController::class, 'checkProvinsi']);
    Route::get('checkout/{produk}', [ClientProdukController::class, 'showCheckout']);
    Route::get('checkout/api/provinsi/{id}', [ClientProdukController::class, 'getKabupaten']);
    Route::get('checkout/api/kabupaten/{id}', [ClientProdukController::class, 'getKecamatan']);
    Route::get('checkout/api/kecamatan/{id}', [ClientProdukController::class, 'getDesa']);
});


Route::get('adminlogin', [AuthController::class, 'showAdminLogin'])->name('login');
Route::post('adminlogin', [AuthController::class, 'AdminLoginprocess']);
Route::get('adminlogout', [AuthController::class, 'Adminlogout']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'Loginprocess']);
Route::get('logout', [AuthController::class, 'Logout']);
Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'registration']);
Route::get('home', [HomeController::class, 'showHome']);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::resource('pembeli', PembeliController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
});


Route::get('alamat', [HomeController::class, 'showAlamat']);
Route::get('checkout', [HomeController::class, 'showCheckout']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);
