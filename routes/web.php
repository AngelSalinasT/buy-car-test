<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;


Route::get('/create', [VehicleController::class, 'create'])->name('create');
Route::post('/store', [VehicleController::class, 'store'])->name('store');
Route::get('/index', [VehicleController::class, 'index'])->name('index');
Route::get('/show/{id}', [VehicleController::class, 'show'])->name('show');
Route::delete('/delete/{id}', [VehicleController::class, 'delete'])->name('delete');
Route::put('/update/{car}', [VehicleController::class, 'update'])->name('update');
