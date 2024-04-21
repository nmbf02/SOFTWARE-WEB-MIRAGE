<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Clasificacionvehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ClasificacionvehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Clasificacionvehiculo::all();
        // return view('estado_compras.index', compact('estados'));
        return view('components.vehiculo.configurar-vehiculo', compact('estados'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validating the input data
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'sometimes|boolean',
            ]);

            // Creating a new instance of Clasificacionvehiculo
            $itbis = new Clasificacionvehiculo();
            $itbis->Descripcion = $request->descripcion; // Correcting the field name for 'Descripcion'

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Clasificacionvehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
            // return redirect()->route('Clasificacionvehiculo.index')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $itbis = Clasificacionvehiculo::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $itbis = Clasificacionvehiculo::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Clasificacionvehiculo::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $itbis = Clasificacionvehiculo::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
