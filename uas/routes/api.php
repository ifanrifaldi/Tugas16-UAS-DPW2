<?php

use App\Http\Controllers\API\AlamatResource;
use App\Http\Controllers\API\ProdukResource;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('produk', ProdukResource::class);
Route::get('provinsi/{id}', [AlamatResource::class, 'getKabupaten']);
Route::get('kabupaten/{id}', [AlamatResource::class, 'getKecamatan']);
Route::get('kecamatan/{id}', [AlamatResource::class, 'getDesa']);

Route::get('client/checkout/provinsi/{id}', [AlamatResource::class, 'getKabupaten']);
Route::get('client/checkout/kabupaten/{id}', [AlamatResource::class, 'getKecamatan']);
Route::get('client/checkout/kecamatan/{id}', [AlamatResource::class, 'getDesa']);