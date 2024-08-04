<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Aceite;

class TipoaceiteController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $aceites = Aceite::all();
        return view('components.vehiculo.configurar-vehiculo', compact('aceites'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    // Store a newly created resource in storage.

    public function store(Request $request)
    {
        try {
            // Validating the input data
            $request->validate([
                'Descripcion' => 'required|string',
                'Status' => 'boolean',
            ]);

            // Creating a new instance of Tipoitbis
            $tipoAceite = new Aceite();
            $tipoAceite->Descripcion = $request->descripcion; // Correcting the field name for 'Descripcion'
            $tipoAceite->Status = $request->status ? 1 : 0;

            $tipoAceite->save();

            return redirect()->route('Tipoaceite')->with('success', 'Tipo de aceite guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    // Display the specified resource.
    public function show(Aceite $aceite)
    {
        return view('tipoaceite.show', compact('aceite'));
    }

    // Show the form for editing the specified resource.
    public function edit(Aceite $aceite)
    {
        return view('tipoaceite.edit', compact('aceite'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Aceite $aceite)
    {
        $request->validate([
            'Descripcion' => 'required|string|max:255',
            'Status' => 'required|boolean',
        ]);

        $aceite->update($request->all());

        return redirect()->route('tipoaceite.index')
            ->with('success', 'Aceite updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Aceite $aceite)
    {
        $aceite->delete();

        return redirect()->route('tipoaceite.index')
            ->with('success', 'Aceite deleted successfully.');
    }
}
