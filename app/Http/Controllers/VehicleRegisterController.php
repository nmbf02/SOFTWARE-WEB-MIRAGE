<?php

namespace App\Http\Controllers;

use App\Models\Aceite;
use App\Models\Motor;
use App\Models\ModeloVehiculo;
use App\Models\ColorVehiculo;
// use App\Models\AcabadoColorVehiculo;
use App\Models\TipoVehiculo;
use App\Models\ClasificacionVehiculo;
use App\Models\TraccionVehiculo;
use App\Models\Transmisionvehiculo;
use App\Models\TipoVehiculoConcesionario;
use App\Models\Ubicacion;
use App\Models\SeguroVehiculo;
use App\Models\SegmentoMercado;
use App\Models\TipoItbis;
use App\Models\Garantia;
use App\Models\EstadoVehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehicleRegisterController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $estadoVehiculo = EstadoVehiculo::all();
        $modeloVehiculo = ModeloVehiculo::all();
        $colorvehiculo = ColorVehiculo::all();
        // $acabadoVehiculo = Acabadocolorvehiculo::all();
        $tipoVehiculo = TipoVehiculo::all();
        $ClasificacionVehiculo = ClasificacionVehiculo::all();
        $traccionVehiculo = TraccionVehiculo::all();
        $trasnmisionVehiculo = Transmisionvehiculo::all();
        $finalidadVehiculo = tipovehiculoconcesionario::all();
        $ubicacionInventario = Ubicacion::all();
        $SeguroVehiculo = SeguroVehiculo::all();
        $SegmentoMercado = SegmentoMercado::all();
        $TipoItbis = TipoItbis::all();
        $garantiaVehiculo = Garantia::all();
        $AceiteVehiculo = Aceite::all();
        $MotorVehiculo = Motor::all();

        return view('components.vehiculo.registrovehiculo', [
            'estadoVehiculo' => $estadoVehiculo,
            'modeloVehiculo' => $modeloVehiculo,
            'colorvehiculo' => $colorvehiculo,
            // 'acabadoVehiculo' => $acabadoVehiculo,
            'tipoVehiculo' => $tipoVehiculo,
            'ClasificacionVehiculo' => $ClasificacionVehiculo,
            'traccionVehiculo' => $traccionVehiculo,
            'trasnmisionVehiculo' => $trasnmisionVehiculo,
            'finalidadVehiculo' => $finalidadVehiculo,
            'ubicacionInventario' => $ubicacionInventario,
            'SeguroVehiculo' => $SeguroVehiculo,
            'SegmentoMercado' => $SegmentoMercado,
            'TipoItbis' => $TipoItbis,
            'garantiaVehiculo' => $garantiaVehiculo,
            'AceiteVehiculo' => $AceiteVehiculo,
            'MotorVehiculo' => $MotorVehiculo,
        ]);
    }
    public function edit($id)
    {

        $vehiculos = Vehiculo::all();
        if(!$id){
            return

            view('components.vehiculo.consultavehiculo', ["numerovehiculo"=> null, "vehiculos" => $vehiculos]);
        }

        $estadoVehiculo = EstadoVehiculo::all();
        $modeloVehiculo = ModeloVehiculo::all();
        $colorvehiculo = ColorVehiculo::all();
        // $acabadoVehiculo = Acabadocolorvehiculo::all();
        $tipoVehiculo = TipoVehiculo::all();
        $ClasificacionVehiculo = ClasificacionVehiculo::all();
        $traccionVehiculo = TraccionVehiculo::all();
        $trasnmisionVehiculo = Transmisionvehiculo::all();
        $finalidadVehiculo = tipovehiculoconcesionario::all();
        $ubicacionInventario = Ubicacion::all();
        $SeguroVehiculo = SeguroVehiculo::all();
        $SegmentoMercado = SegmentoMercado::all();
        $TipoItbis = TipoItbis::all();
        $garantiaVehiculo = Garantia::all();
        $AceiteVehiculo = Aceite::all();
        $MotorVehiculo = Motor::all();

        $vehiculo = Vehiculo::where('IdVehiculo',$id)->where('Status',1)->first();

        if(!$vehiculo){
            $vehiculos = Vehiculo::where('Status',1)->get();
            return view('components.vehiculo.consultavehiculo', ["numerovehiculo"=> null, "vehiculos" => $vehiculos]);
        }

        return view('components.vehiculo.registrovehiculo', [
            'vehiculo' => $vehiculo,
            'estadoVehiculo' => $estadoVehiculo,
            'modeloVehiculo' => $modeloVehiculo,
            'colorvehiculo' => $colorvehiculo,
            // 'acabadoVehiculo' => $acabadoVehiculo,
            'tipoVehiculo' => $tipoVehiculo,
            'ClasificacionVehiculo' => $ClasificacionVehiculo,
            'traccionVehiculo' => $traccionVehiculo,
            'trasnmisionVehiculo' => $trasnmisionVehiculo,
            'finalidadVehiculo' => $finalidadVehiculo,
            'ubicacionInventario' => $ubicacionInventario,
            'SeguroVehiculo' => $SeguroVehiculo,
            'SegmentoMercado' => $SegmentoMercado,
            'TipoItbis' => $TipoItbis,
            'garantiaVehiculo' => $garantiaVehiculo,
            'AceiteVehiculo' => $AceiteVehiculo,
            'MotorVehiculo' => $MotorVehiculo,
        ]);
    }
}
