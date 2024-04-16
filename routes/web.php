<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController; 
use App\Http\Controllers\DeliveryController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de vehículos
Route::get('/api/vehiculos',[VehicleController::class, 'index']); // Ruta principal que almacena una lista de los vehículos
Route::post('/api/vehiculos', [VehicleController::class, 'store']); // Ruta de almacenamiento de los vehículos
Route::get('/api/vehiculos/{id}',[VehicleController::class, 'show']); // Ruta que trae un vehículo en específico 
Route::patch('/api/vehiculos/{id}',[VehicleController::class, 'update']); // Ruta que actualiza un vehículo
Route::delete('/api/vehiculos/{id}',[VehicleController::class, 'destroy']); // Ruta que borra un vehículo

//rutas de repartidores
Route::get('/api/repartidores', [DeliveryController::class, 'index']); //Ruta principla que almacena una lista de repartidores
Route::post('/api/repartidores', [DeliveryController::class, 'store']); //Ruta de almacenimiento de os vehiculos
Route::get('/api/repartidores/{id}',[DeliveryController::class, 'show']); //Ruta  que trae un repartidor en especifico
Route::patch('/api/repartidores/{id}',[DeliveryController::class , 'update']); //Ruta que actualiza un repartidor
Route::delete('/api/repartidores/{id}', [DeliveryController::class, 'destroy']); //ruta que elimina un repartidor

//ruta
