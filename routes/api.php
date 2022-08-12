<?php

use App\Http\Controllers\TransaksiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi/create', [TransaksiController::class, 'store']);
Route::put('/transaksi/edit/{id}', [TransaksiController::class, 'update']);
Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
Route::get('/transaksi/delete/{id}', [TransaksiController::class, 'destroy']);

