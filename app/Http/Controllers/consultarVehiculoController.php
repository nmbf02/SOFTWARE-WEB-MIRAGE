<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class consultarVehiculoController extends Controller
{
    /**
     * Muestra la página de consulta de cotizacion.
     *
     * @param string|null $numerovehiculo Número de la cotizacion opcional
     * @return \Illuminate\Http\Response
     */
    public function consultarVehiculo($numerovehiculo = null)
    {
        $vehiculos = Vehiculo::where('Status',1)->get();
        // return view('components.vehiculo.consultavehiculo', compact('numerovehiculo'));
        return view('components.vehiculo.consultavehiculo', ["numerovehiculo"=> $numerovehiculo, "vehiculos" => $vehiculos]);
    }

    public function index()
    {
        $vehiculos = Vehiculo::where('Status',1)->get();
        return response()->json($vehiculos);
    }

    public function store(Request $request)
    {
        $vehiculo = Vehiculo::create($request->all());
        return response()->json($vehiculo, 201);
    }

    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }
        return response()->json($vehiculo);
    }

    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }
        $vehiculo->update($request->all());
        return response()->json($vehiculo);
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }
        $vehiculo->delete();
        return response()->json(['message' => 'Vehículo eliminado']);
    }
}
