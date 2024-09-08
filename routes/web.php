<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/index', [VehicleController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});



