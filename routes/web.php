<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/index', [VehicleController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/show/{id}', [VehicleController::class, 'show'])->name('show');

Route::get('/delete/{id}', [VehicleController::class, 'delete'])->name('delete');
Route::get('/create', [VehicleController::class, 'create'])->name('create');
