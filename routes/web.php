<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/city', [CityController::class, 'index']);
Route::get('/city/create', [CityController::class, 'create']);
Route::post('/city/create', [CityController::class, 'store']);