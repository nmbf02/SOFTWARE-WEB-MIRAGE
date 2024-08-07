<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RegistrarEmpleadoController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        // dd($request->all());
        $request->validate([
            'IdPersona' => 'int|exist:persona',
            'Nombre' => 'required|exist:persona',
            'Apellido' => 'required|exist:persona',
            'Email' => 'required|exist:persona',
            'Telefono' => 'required|exist:persona',
            'tipoEmpleado' => 'required|exists:tipoEmpleado,IdTipoEmpleado',
            'status' => 'nullable|boolean',
        ]);
 
        $crearEmpleado = new Empleado();

        // Assign the request data to the empleado instance
        $crearEmpleado->Nombre = $request->nombre;
        $crearEmpleado->Apellido = $request->apellido;    
        $crearEmpleado->Email = $request->email;
        $crearEmpleado->Telefono = $request->telefono;
        $crearEmpleado->IdTipoEmpleado = $request->tipoEmpleado;
        $crearEmpleado->Status = $request->Status =="on"? 1:0;

        // Save the empleado instance to the database
  
        $crearEmpleado->save();


        return redirect('employee-register')->with('success', 'Guardado con exito');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nombre' => 'nullable|string',
            'apellido' => 'nullable|string',
            'email' => 'nullable|string',
            'telefono' => 'nullable|string',
            'tipoEmpleado' => 'required|exists:tipoEmpleado,IdTipoEmpleado',
            'status' => 'nullable|boolean',
        ]);

        $empleado = Empleado::where('Idempleado',$request->Idempleado)->where('Status',1)->first();
        // dd($empleado,$request, $request->descripcion,$request->Idempleado);
        if($empleado != null){
            // Assign the request data to the empleado instance
            $empleado->Nombre = $request->nombre;
            $empleado->Apellido = $request->apellido;
            $empleado->Email = $request->email;    
            $empleado->Telefono = $request->telefono;
            $empleado->IdTipoEmpleado = $request->tipoEmpleado;
            $empleado->Status = $request->status ? 1 : 0;

        }


        // Save the empleado instance to the database
        $empleado->save();

        return redirect('employee-register')->with('success', 'Guardado con exito');
    }

    public function destroy(Request $request,$Idempleado)
    { 
        $empleado = Empleado::where('Idempleado',$request->Idempleado)->where('Status',1)->first();
        // dd($empleado,$request, $request->descripcion,$request->Idempleado);
        if($empleado != null){ 
            $empleado->Status = 2; //eliminado 
            $empleado->save();
        }
 

        $empleados = Empleado::where('Status',1)->get(); 
        return view('components.empleado.consultaempleado', ["numeroempleado"=> null, "empleados" => $empleados]);
    }
}