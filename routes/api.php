<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/save', [App\Http\Controllers\RouteController::class, 'store']);
Route::post('/user/route', [App\Http\Controllers\RouteController::class, 'route']);
Route::get('/landmarks/{from}/{to}', [RouteController::class, 'getLandmarksBetween']);