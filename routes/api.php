<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\ApiBarangController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/refresh', [UserController::class, 'refresh']);
    Route::get('/user-profile', [UserController::class, 'userProfile']);    
});
Route::get('/kategori', [ApiBarangController::class, 'kategori']);  
Route::get('/flashsale', [ApiBarangController::class, 'flashSale']);  
Route::post('/detail/{id}', [BarangController::class, 'detailBarang']);  
Route::post('/cekpesanan/{id}', [\App\Http\Controllers\Api\ApiTransaksiController::class, 'cekstatus']);
Route::post('/pesan', [\App\Http\Controllers\Api\ApiTransaksiController::class, 'pesan']);

