<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Segmentomercado;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SegmentomercadoController extends Controller
{
    public function index()
    {
        $estados = Segmentomercado::all();
        // return view('estado_compras.index', compact('estados'));
        return view('components.vehiculo.configurar-vehiculo', compact('estados'));
    }

    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    public function store(Request $request)
    {
        try {
            // Validating the input data
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'sometimes|boolean',
            ]);

            // Creating a new instance of Segmentomercado
            $itbis = new Segmentomercado();
            $itbis->Descripcion = $request->descripcion; // Correcting the field name for 'Descripcion'

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Segmentomercado')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Segmentomercado::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Segmentomercado::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Segmentomercado::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Segmentomercado::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
