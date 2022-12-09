<?php

use App\Http\Controllers\mahasiswaController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswas',[mahasiswaController::class, 'index']);
Route::get('/mahasiswas/{id}',[mahasiswaController::class, 'show']);
Route::post('/mahasiswas',[mahasiswaController::class, 'store']);
Route::put('/mahasiswas/{id}',[mahasiswaController::class, 'update']);
Route::delete('/mahasiswas/{id}',[mahasiswaController::class, 'destroy']);
