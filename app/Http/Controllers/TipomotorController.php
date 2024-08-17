<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class TipomotorController extends Controller
{
    public function index()
    {
        $motorVehiculo = Motor::all();
        return view('components.vehiculo.configurar-vehiculo', compact('$motorVehiculo'));
    }

    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'status' => 'boolean',
        ]);

        // Creating a new instance of AceiteMotor
        $aceiteMotor = new Motor();
        $aceiteMotor->Descripcion = $request->descripcion; // Correcting the field name for 'descripcion'
        $aceiteMotor->Status = $request->status ? 1 : 0;

        $aceiteMotor->save();

        // Redirect the user to the vehicle configuration page with a success message
        return redirect('services-maintenance')->with('success', 'Guardado con éxito');
    }

    public function show(AceiteMotor $aceiteMotor)
    {
        return view('aceitemotor.show', compact('aceiteMotor'));
    }

    public function edit(AceiteMotor $aceiteMotor)
    {
        return view('aceitemotor.edit', compact('motorVehiculo'));
    }

    public function update(Request $request, Motor $motorVehiculo)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $motorVehiculo->update($request->only(['descripcion', 'status']));

        return redirect()->route('$motorVehiculo')->with('success', 'Aceite de motor actualizado con éxito.');
    }

    public function destroy(Motor $motorVehiculo)
    {
        $motorVehiculo->delete();

        return redirect()->route('$motorVehiculo')->with('success', 'Aceite de motor eliminado con éxito.');
    }
}
