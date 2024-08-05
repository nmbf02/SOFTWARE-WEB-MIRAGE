<?php

namespace App\Http\Controllers;

use App\Models\TipoEmpleado;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class TipoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoEmpleado = TipoEmpleado::all();
        //dd($tipoEmpleado->all());
        // Retorna la vista con ambas variables. 
        return view('components.nomina.configurar-nomina', compact('tipoEmpleado'));
    }

    public function create()
    {
        return view('components.nomina.configurar-nomina');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'nullable|boolean',
            ]);

            $tipoemp = new TipoEmpleado();
            $tipoemp->Descripcion = $request->descripcion;

            $tipoemp->Status = $request->status ? 1 : 0;

            $tipoemp->save();

            return view('components.nomina.configurar-nomina');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $tipoemp = TipoEmpleado::findOrFail($id);
        return view('configurar_nomina.show', compact('tipoEmp'));
    }

    public function edit(string $id)
    {
        $tipoemp = TipoEmpleado::findOrFail($id);
        return view('configurar_nomina.edit', compact('tipoEmp'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $tipoemp = TipoEmpleado::findOrFail($id);
        $tipoemp->update($request->all());

        return redirect()->route('configurar_nomina.index');
    }

    public function destroy(string $id)
    {
        $tipoemp = TipoEmpleado::findOrFail($id);
        $tipoemp->delete();

        return redirect()->route('configurar_nomina.index');
    }
}