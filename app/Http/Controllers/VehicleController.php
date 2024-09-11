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
        $vehicles = Vehicle::paginate(12);

        // Pasar los vehículos a la vista index.blade.php
        return view('index', ['vehicles' => $vehicles]);
    }

    public function show($id) {
        $vehicle = Vehicle::findOrFail($id);
        return view('show', compact('vehicle'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $vehicle = new Vehicle();
        $vehicle->brand = $request->brand;
        $vehicle->description = $request->description;
        $vehicle->price = $request->price;
        $vehicle->save();

        return redirect()->route('show', $vehicle->id);
    }

    public function delete($id) {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect()->route('index')->with('success', 'Vehicle deleted successfully!');
    }

    public function update(Request $request, $id) {
        // Validar los datos entrantes
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Buscar el vehículo por ID
        $vehicle = Vehicle::findOrFail($id);

        // Actualizar los datos del vehículo utilizando el método update
        $vehicle->update($validatedData);

        // Redirigir a la vista de detalles del vehículo actualizado
        return redirect()->route('show', $vehicle->id);
    }


}
