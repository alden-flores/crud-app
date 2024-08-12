<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/city', [CityController::class, 'index']);
Route::get('/city/create', [CityController::class, 'create']);
Route::get('/city/{id}/edit',[CityController::class, 'edit']);
Route::get('/city/{id}/view',[CityController::class, 'view']);
Route::post('/city/create', [CityController::class, 'store']);
Route::put('city/{id}/edit', [CityController::class, 'update']);