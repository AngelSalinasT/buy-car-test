<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Muestra la lista de vehículos.
     */
    public function index()
    {
        // Obtener todos los registros de la tabla vehicles
        $vehicles = Vehicle::all();

        // Pasar los vehículos a la vista index.blade.php
        return view('index', ['vehicles' => $vehicles]);
    }

    
}
