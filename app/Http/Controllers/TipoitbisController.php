<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Tipoitbis;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TipoitbisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Tipoitbis::all();
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
                'porcentajeitibis' => 'required|numeric|between:0,99.99',
                'nombreitbis' => 'required|string',
                'descripcionitbis' => 'required|string',
                'statusitbis' => 'sometimes|boolean',
            ]);

            // Creating a new instance of Tipoitbis
            $itbis = new Tipoitbis();
            $itbis->Nombre = $request->nombreitbis; // Ensuring the 'Nombre' field is assigned
            $itbis->Descripcion = $request->descripcionitbis; // Correcting the field name for 'Descripcion'
            $itbis->Porcentaje = $request->porcentajeitibis; // Ensuring the 'Porcentaje' field is assigned

            $itbis->Status = $request->statusitbis ? 1 : 0;

            $itbis->save();

            return redirect()->route('Tipoitbis.index')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $itbis = Tipoitbis::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $itbis = Tipoitbis::findOrFail($id);
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

        $itbis = Tipoitbis::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $itbis = Tipoitbis::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
