<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Canalcomunicacion;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CanalcomunicacionController extends Controller
{
    public function index()
    {
        $estados = Canalcomunicacion::all();
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

            $moneda = new Canalcomunicacion();
            $moneda->Descripcion = $request->descripcion;

            $moneda->Status = $request->status ? 1 : 0;

            $moneda->save();

            return redirect()->route('Canalcomunicacion')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $moneda = Canalcomunicacion::findOrFail($id);
        return view('estado_compras.show', compact('moneda'));
    }

    public function edit(string $id)
    {
        $moneda = Canalcomunicacion::findOrFail($id);
        return view('estado_compras.edit', compact('moneda'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $moneda = Canalcomunicacion::findOrFail($id);
        $moneda->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $moneda = Canalcomunicacion::findOrFail($id);
        $moneda->delete();

        return redirect()->route('estado_compras.index');
    }
}
