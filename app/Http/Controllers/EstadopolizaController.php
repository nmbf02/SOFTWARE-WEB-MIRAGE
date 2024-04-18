<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Estadopoliza;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EstadopolizaController extends Controller
{
    public function index(Request $request)
    {
       
        $estados = Estadopoliza::all();
        // dd($estados);
        return view('components.configuracion.configuracion-general', compact('estados'));
    }

    public function create()
    {
        return view('components.configuracion.configuracion-general');
    }

    public function store(Request $request)
    {
        // dd('hola');
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'sometimes|boolean',
            ]);

            $itbis = new Estadopoliza();
            $itbis->Descripcion = $request->descripcion;

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Estadopoliza')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Estadopoliza::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Estadopoliza::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Estadopoliza::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Estadopoliza::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
