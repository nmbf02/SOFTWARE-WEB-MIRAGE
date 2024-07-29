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
        $tipoEmpleado = CargoEmpleado::all();

        // Retorna la vista con ambas variables. 
        return view('components.nomina.configurar-nomina', compact('cargoEmp'));
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

            $tipoemp = new CargoEmpleado();
            $tipoemp->Descripcion = $request->descripcion;

            $tipoemp->Status = $request->status ? 1 : 0;

            $tipoemp->save();


            return redirect('configurar-nomina')->with('success', 'Cargo de empleado guardado con éxito.');
            // return redirect()->route('Grupovehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $tipoemp = CargoEmpleado::findOrFail($id);
        return view('configurar_nomina.show', compact('cargoEmp'));
    }

    public function edit(string $id)
    {
        $tipoemp = CargoEmpleado::findOrFail($id);
        return view('configurar_nomina.edit', compact('cargoEmp'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $tipoemp = CargoEmpleado::findOrFail($id);
        $tipoemp->update($request->all());

        return redirect()->route('configurar_nomina.index');
    }

    public function destroy(string $id)
    {
        $tipoemp = CargoEmpleado::findOrFail($id);
        $tipoemp->delete();

        return redirect()->route('configurar_nomina.index');
    }
}