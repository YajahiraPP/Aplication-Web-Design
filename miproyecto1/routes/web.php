<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\SuperheroController; 

// Rutas generales
Route::get('/', function () { return view('welcome'); });
Route::get('/start', function () { return view('index'); });

// Rutas de Suma (apuntan a SumaController)
Route::get('/suma', [SumaController::class, 'index']);
Route::post('/suma', [SumaController::class, 'calcular']);

// Ruta de Superhéroes (apunta a SuperheroController)
Route::get('/superheroes', [SuperheroController::class, 'index']);