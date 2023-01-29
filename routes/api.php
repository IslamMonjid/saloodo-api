<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SenderAuthController;
use App\Http\Controllers\BikerAuthController;


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

Route::controller(SenderAuthController::class)->group(function () {
    Route::post('sender/login', 'login');
    Route::post('sender/logout', 'logout');

});

Route::controller(BikerAuthController::class)->group(function () {
    Route::post('biker/login', 'login');
    Route::post('biker/logout', 'logout');
});

