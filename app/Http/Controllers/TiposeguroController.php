<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Tiposeguro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TiposeguroController extends Controller
{
    public function index()
    {
        $estados = Tiposeguro::all();
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

            $itbis = new Tiposeguro();
            $itbis->Descripcion = $request->descripcion;

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Tiposeguro')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Tiposeguro::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Tiposeguro::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Tiposeguro::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Tiposeguro::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
