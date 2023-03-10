<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SenderAuthController;
use App\Http\Controllers\BikerAuthController;
use App\Http\Controllers\ParcelController;

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

Route::controller(ParcelController::class)->group(function () {
    Route::get('parcel/get-status', 'getParcelsStatus');
    Route::get('parcel/get-parcels-list-for-bikers', 'getParcelsListForBiker');
    Route::get('parcel/get-biker-parcels', 'getBikerParcels');
    Route::get('parcel/pick-up-parcel/{id}', 'pick_up_parcel');
    Route::get('parcel/drop-off-parcel/{id}', 'drop_off_parcel');
    Route::post('parcel/create', 'create');
});

