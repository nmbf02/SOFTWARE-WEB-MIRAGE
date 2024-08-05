<?php

namespace App\Http\Controllers;

use App\Models\DepartamentoEmpleado;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class DepartamentoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DepartamentoEmpleado = DepartamentoEmpleado::all();

        // Retorna la vista con ambas variables. 
        return view('components.nomina.configurar-nomina', compact('departEmp'));
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

            $departemp = new DepartamentoEmpleado();
            $departemp->Descripcion = $request->descripcion;

            $departemp->Status = $request->status ? 1 : 0;

            $departemp->save();


            return redirect('configurar-nomina')->with('success', 'Departamento de empleado guardado con éxito.');
            // return redirect()->route('Grupovehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $departemp = DepartamentoEmpleado::findOrFail($id);
        return view('configurar_nomina.show', compact('departemp'));
    }

    public function edit(string $id)
    {
        $departemp = DepartamentoEmpleado::findOrFail($id);
        return view('configurar_nomina.edit', compact('departemp'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $departemp = DepartamentoEmpleado::findOrFail($id);
        $departemp->update($request->all());

        return redirect()->route('configurar_nomina.index');
    }

    public function destroy(string $id)
    {
        $departemp = DepartamentoEmpleado::findOrFail($id);
        $departemp->delete();

        return redirect()->route('configurar_nomina.index');
    }
}