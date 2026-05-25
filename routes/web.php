<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\SucursalController;

Route::get('/sucursales', [SucursalController::class, 'index']);
Route::get('/sucursales/create', [SucursalController::class, 'create']);
Route::post('/sucursales', [SucursalController::class, 'store']);
Route::delete('/sucursales/{id}', [SucursalController::class, 'destroy']);
Route::get('/sucursales/{id}/edit', [SucursalController::class, 'edit']);
Route::put('/sucursales/{id}', [SucursalController::class, 'update']);