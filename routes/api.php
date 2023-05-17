<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;

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

Route::resource('kendaraan', KendaraanController::class)->only([
    'destroy', 'show', 'update', 'index'
 ]);
Route::resource('motor', MotorController::class)->only([
    'destroy', 'show', 'store', 'update', 'index'
 ]);
Route::resource('mobil', MotorController::class)->only([
    'destroy', 'show', 'store', 'update', 'index'
 ]);

// Route::get('/posts-list', [PostController::class, 'list']);
