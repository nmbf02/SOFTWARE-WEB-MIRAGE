<?php

namespace App\Http\Controllers;

use App\Models\TipoMantenimiento;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MantenimientoMantenimientoController extends Controller
{
    public function index()
    {
        $tipoMantenimiento = TipoMantenimiento::all();
        return view('components.mantenimiento.configuracion-mantenimiento', compact('tipoMantenimiento'));
    }

    public function create()
    {
        return view('components.mantenimiento.configuracion-mantenimiento');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'nullable|boolean',
            ]);

            $tipoMantenimiento = new TipoMantenimiento();
            $tipoMantenimiento->Descripcion = $request->descripcion;
            $tipoMantenimiento->Status = $request->status ? 1 : 0;
            $tipoMantenimiento->save();

            return redirect()->route('maintenance-configuration')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }
}
