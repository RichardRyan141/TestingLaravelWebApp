<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\NftController;


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

Route::get('/user/create', [PenggunaController::class, 'create']);
Route::post('/user', [PenggunaController::class, 'store']);
Route::get('/user', [PenggunaController::class, 'index']);


Route::get('/nft/create', [NftController::class, 'create']);
Route::post('/nft', [NftController::class, 'store'])->name('nft.store');
Route::get('/nft', [NftController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
