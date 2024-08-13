<?php

use App\Http\Controllers\BarangayController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
//CITY FORM ROUTES
Route::get('/city', [CityController::class, 'index']);
Route::get('/city/create', [CityController::class, 'create']);
Route::get('/city/{id}/edit',[CityController::class, 'edit']);
Route::get('/city/{id}/view',[CityController::class, 'view']);
Route::get('city/{id}/delete', [CityController::class, 'delete']);
Route::post('/city/create', [CityController::class, 'store']);
Route::put('city/{id}/edit', [CityController::class, 'update']);
//BARANGAY FORM ROUTES
Route::get('/barangay', [BarangayController::class, 'index']);
Route::get('/barangay/create', [BarangayController::class, 'create']);
Route::post('barangay/create', [BarangayController::class, 'store']);
Route::get('/barangay/{id}/edit',[BarangayController::class, 'edit']);
Route::put('/barangay/{id}/edit', [BarangayController::class, 'update']);
Route::get('/barangay/{id}/view',[BarangayController::class, 'view']);
Route::get('/barangay/{id}/delete', [BarangayController::class, 'delete']);