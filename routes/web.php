<?php

use App\Http\Controllers\AwarenessReport;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CoronaVirusReport;
use App\Http\Controllers\PatientController;
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

//PATIENT ROUTES
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/patient/create', [PatientController::class, 'create']);
Route::post('/patient/create',[PatientController::class, 'store']);
Route::get('/patient/{id}/edit', [PatientController::class, 'edit']);
Route::put('/patient/{id}/edit', [PatientController::class, 'update']);
Route::get('/patient/{id}/view',[PatientController::class, 'view']);
Route::get('/patient/{id}/delete', [PatientController::class, 'delete']);

//AWARENESS REPORT
Route::get('/awareness',[AwarenessReport::class, 'index']);
Route::post('/awareness/report',[AwarenessReport::class,'genReport']);
//THIS IS TO GRAB DATA FOR THE DROP DOWN
Route::get('/getbrgy',[AwarenessReport::class, 'getbrgy']);

//CORONAVIRUS REPORT
Route::get('/coronavirus',[CoronaVirusReport::class, 'index']);
Route::post('/coronavirus/report',[CoronaVirusReport::class,'genReport']);
//THIS IS TO GRAB DATA FOR THE DROP DOWN
Route::get('/getbrgy',[CoronaVirusReport::class, 'getbrgy']);