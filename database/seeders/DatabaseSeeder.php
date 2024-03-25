<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\abonoprestamovehiculos;
use App\Models\estadocompra;
use App\Models\frecuenciamantenimiento;
use App\Models\grupovehiculos;
use App\Models\tipocontratoempleado;
use App\Models\tipoitbis;
use App\Models\tipomantenimiento;
use App\Models\tipomotivoordenreparacion;
use App\Models\tipomovimientoinventario;
use App\Models\tiponominaempleado;
use App\Models\tipopersona;
use App\Models\tipoprestamo;
use App\Models\tiporetroalimentacion;
use App\Models\tiporiesgo;
use App\Models\tiposPorcentaje;
use App\Models\tipovehiculoconcesionario;
use App\Models\traccionvehiculos;
use App\Models\viasolicitud;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            acabadocolorvehiculosSeeder::class,
            almacenSeeder::class,
            aseguradoravehiculosS::class,
            estadorentaSeeder::class,
            bancoSeeder::class,
            beneficioSeeder::class,
            beneficioempleadoS::class,
            canalcomunicacionS::class,
            cargoempleadoS::class,
            categorialicenciaS::class,
            ciudadSeeder::class,
            estadocompraSeeder::class,
            estadocompraSeeder::class,
            estadocotizacionrentaSeeder::class,
            estadoordencompraSeeder::class,
            estadoordenreparacionSeeder::class,
            estadorentaSeeder::class,
            estadosolicitudSeeder::class,
            estadosubastaeeder::class,
            estadovehiculostaeeder::class,
            formapagotaeeder::class,
            frecuenciamantenimiento::class,
            grupovehiculos::class,
            lapsotiempoSeeder::class,
            metodopagoSeeder::class,
            monedaSeeder::class,
            paisSeeder::class,
            personaSeeder::class,
            prioridadcomunicacionSeeder::class,
            segmentomercadoSeeder::class,
            tipoabonoprestamoSeeder::class,
            tipocontratoempleadoSeeder::class,
            tipocotizacionrentaSeeder::class,
            tipodeduccionesSeeder::class,
            tipodocumentopersonaSeeder::class,
            tipoempleadoSeeder::class,
            tipoingresosSeeder::class,
            tipoitbis::class,
            tipomantenimientoSeeder::class,
            tipomotivoordenreparacionSeeder::class,
            tipomovimientoinventario::class,
            tipomovimientoretroalimentacionSeeder::class,
            tiponominaempleado::class,
            tipopersonaSeeder::class,
            tiporetroalimentacionSeeder::class,
            tiponominaempleadoSeeder::class,
            tipopersonaSeeder::class,
            tiporetroalimentacionSeeder::class,
            tiporiesgoSeeder::class,
            tiposeguroSeeder::class,
            tipovehiculoconcesionarionSeeder::class,
            tiponominaempleadoSeeder::class,
            tipopersonaSeeder::class,
            tipoporcetajeSeeder::class,
            tipoprestamoSeeder::class,
            tiporetroalimentacionSeeder::class,
            tiporiesgoSeeder::class,
            tiposeguroSeeder::class,
            tipovehiculoconcesionarionSeeder::class,
            tipovehiculosSeeder::class,
            traccionvehiculosSeeder::class,
            transmisionvehiculosSeeder::class,
            ubicacionSeeder::class,
            traccionvehiculosSeeder::class,
            transmisionvehiculosSeeder::class,
            ubicacionSeeder::class,
            viasolicitudSeeder::class
        ]);
    }
}
