<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\RecintoAnimalController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\Cuidador_AnimalController;
use App\Http\Controllers\ActividadController;


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

Route::resource('/Animal', AnimalController::class);
Route::resource('/Especie', EspecieController::class);
Route::resource('/Recinto', RecintoController::class);
Route::post('/Recinto/alimentacion', 'RecintoController@alimentacion');
Route::post('/Recinto/descanso', 'RecintoController@descanso');
Route::resource('/RecintoAnimal', RecintoAnimalController::class);
Route::resource('/Cuidador', CuidadorController::class);
Route::resource('/Cuidador_Animal', Cuidador_AnimalController::class);
Route::resource('/Actividad', ActividadController::class);
    return $request->user();
});
