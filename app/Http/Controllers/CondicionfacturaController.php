<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Condicionfactura;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CondicionfacturaController extends Controller
{
    // public function index()
    // {
    //     $estados = Condicionfactura::all();
    //     return view('components.configuracion.configuracion-general', compact('estados'));
    // }

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
                'cantidaddias' => 'required|string',
                'status' => 'sometimes|boolean',
            ]);

            $moneda = new Condicionfactura();
            $moneda->Descripcion = $request->descripcion;
            $moneda->CantidadDias = $request->cantidaddias;
            $moneda->Status = $request->status ? 1 : 0;

            $moneda->save();

            return redirect('general-configuration')->with('success', 'Guardado con exito');
            // return redirect()->route('Condicionfactura')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $moneda = Condicionfactura::findOrFail($id);
        return view('estado_compras.show', compact('moneda'));
    }

    public function edit(string $id)
    {
        $moneda = Condicionfactura::findOrFail($id);
        return view('estado_compras.edit', compact('moneda'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $moneda = Condicionfactura::findOrFail($id);
        $moneda->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $moneda = Condicionfactura::findOrFail($id);
        $moneda->delete();

        return redirect()->route('estado_compras.index');
    }
}