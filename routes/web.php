<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VaccineWalletsController;
use App\Http\Controllers\VaccinesController;
use App\Http\Controllers\BreedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('clients', ClientController::class);
Route::resource('animals', AnimalController::class);
Route::resource('patients', PatientController::class);
Route::resource('vaccinewallets', VaccineWalletsController::class);
Route::resource('vaccines', VaccinesController::class);
Route::resource('breeds', BreedController::class);
