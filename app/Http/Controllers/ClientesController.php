<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Store a newly created client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de los datos
        
        $request->validate([
            'nombrecliente' => 'required|string',
            'apellidocliente' => 'required|string',
            'fechanacimientocliente' => 'required|date',
            'seguroPersona' =>  'required|exists:seguro,IdSeguro',
            'casapersona' => 'nullable|string',
            'callepersona' => 'nullable|string',
            'sectorPersona' => 'required|exists:sector,IdSector',
            'telefonocliente' => 'required|string',
            'emailcliente' => 'required|email',
            'clasificaionCliente' => 'required|exists:tipopersona,IdTipoPersona',
            'categoriaCliente' => 'required|exists:categorialicencia,IdCategoriaLicencia',
            'condicionFactura' => 'required|exists:condicionfactura,IdCondicionFactura',
        ]);

        // Crear la Persona
        $persona = new Persona();
        dd($request->all());
        $persona->Nombre = $request->nombrecliente;
        $persona->Apellido = $request->apellidocliente;
        $persona->FechaNacimiento = $request->fechanacimientocliente;
        $persona->Telefono = $request->telefonocliente;
        $persona->Email = $request->emailcliente;
        $persona->Casa = $request->casapersona;
        $persona->Calle = $request->callepersona;
        $persona->IdSector = $request->sectorPersona;
        $persona->IdCuenta = $request->id_cuenta;
        $persona->IdSeguro = $request->seguroPersona;
        $persona->save();  // Guardar la Persona

        // Crear el Cliente ligado a la Persona
        $cliente = new Cliente();
        dd($cliente->all());
        $cliente->IdPersona = $persona->IdPersona;  // Clave foránea de Persona
        $cliente->IdTipoPersona = $request->IdTipoPersona;
        $cliente->IdCategoriaLicencia = $request->IdCategoriaLicencia;
        $cliente->IdCondicionFactura = $request->IdCondicionFactura;

        
        
        $cliente->save();  // Guardar el Cliente

        // Redireccionar con mensaje
        return redirect()->route('customer-register')->with('success', 'Cliente creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $cliente->load('persona');
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $cliente->load('persona');
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            // Valida otros campos según sea necesario
        ]);

        $cliente->persona->update([
            'Nombre' => $request->nombre,
            'Apellido' => $request->apellido,
            'FechaNacimiento' => $request->fecha_nacimiento,
            // Actualiza otros campos como necesario
        ]);

        $cliente->update([
            // Actualiza los campos específicos del cliente, si es necesario
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito.');
    }
}
