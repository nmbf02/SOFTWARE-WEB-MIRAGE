<?php

namespace App\Http\Controllers;

use App\Models\CargoEmpleado;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class CargoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargoemp = CargoEmpleado::all();

        // Retorna la vista con ambas variables. 
        return view('components.nomina.configurar-nomina', compact('cargoemp'));
    }

    public function create()
    {
        return view('components.nomina.configurar-nomina');
    }

    public function store(Request $request)
    {
        dd($request->all());
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'nullable|boolean',
            ]);

            $cargoemp = new CargoEmpleado();
            $cargoemp->Descripcion = $request->descripcion;
            $cargoemp->Status = $request->status ? 1 : 0;
            $cargoemp->save();
            return view('components.nomina.configurar-nomina');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $cargoemp = CargoEmpleado::findOrFail($id);
        return view('configurar_nomina.show', compact('cargoemp'));
    }

    public function edit(string $id)
    {
        $cargoemp = CargoEmpleado::findOrFail($id);
        return view('configurar_nomina.edit', compact('cargoemp'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $cargoemp = CargoEmpleado::findOrFail($id);
        $cargoemp->update($request->all());

        return redirect()->route('configurar_nomina.index');
    }

    public function destroy(string $id)
    {
        $cargoemp = CargoEmpleado::findOrFail($id);
        $cargoemp->delete();

        return redirect()->route('configurar_nomina.index');
    }
}