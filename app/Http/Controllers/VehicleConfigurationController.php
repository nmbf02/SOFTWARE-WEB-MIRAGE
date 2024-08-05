<?php

namespace App\Http\Controllers;

use App\Models\Grupovehiculo;
use App\Models\Marcavehiculo;
use App\Models\Moneda;
use App\Models\AseguradoraVehiculo;
use App\Models\Modelovehiculo;
use App\Models\Acabadocolorvehiculo;
use App\Models\Almacen;
use App\Models\Sucursal;
use App\Models\Aceite;
use App\models\Motor;

use Illuminate\Http\Request;

class VehicleConfigurationController extends Controller
{
    public function index()
    {
        $acabadoVehiculo = Acabadocolorvehiculo::all();
        $vehicleGroups = Grupovehiculo::all();
        $marcaVehiculo = Marcavehiculo::all();
        $Modelovehiculo = Modelovehiculo::all();
        $Monedaseguro = Moneda::all();
        $aseguradoravehiculo = AseguradoraVehiculo::all();
        $Almacenvehiculo = Almacen::all();
        $SucursalVehiculo = Sucursal::all();
        $AceiteVehiculo = Aceite::all();



        return view('components.vehiculo.configurar-vehiculo', [
            'gruposVehiculo' => $vehicleGroups,
            'marcaVehiculo' => $marcaVehiculo,
            'modeloVehiculo' => $Modelovehiculo,
            'acabadoVehiculo' => $acabadoVehiculo,
            'Monedaseguro' => $Monedaseguro,
            'aseguradoravehiculo' => $aseguradoravehiculo,
            'Almacenvehiculo' => $Almacenvehiculo,
            'SucursalVehiculo' => $SucursalVehiculo,
            'AceiteVehiculo' => $AceiteVehiculo,
        ]);
    }
}
