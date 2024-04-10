<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultarFacturaController;
use App\Http\Controllers\consultarCotizacionController;
use App\Http\Controllers\registrarRentaController;
use App\Http\Controllers\registrarClienteController;
use App\Http\Controllers\registrarUsuarioController;
use App\Http\Controllers\registrarSuplidorController;
use App\Http\Controllers\registrarvehiculoController;
use App\Http\Controllers\consultarSubastaController;
use App\Http\Controllers\consultarNominaController;
use App\Http\Controllers\consultarRentaController;
use App\Http\Controllers\consultarVehiculoController;
use App\Http\Controllers\consultarcotizacionRentaController;
use App\Http\Controllers\registrarFacturaController;
use App\Http\Controllers\registrarCotizacionFacturaController;
use App\Http\Controllers\registrarCotizacionRentaController;
use App\Http\Controllers\registrarSubastaController;
use App\Http\Controllers\consultarClienteController;
use App\Http\Controllers\consultarSuplidorController;
use App\Http\Controllers\historialPagosController;
use App\Http\Controllers\solicitudPrestamoVehiculoController;
use App\Http\Controllers\retroalimentacionClienteController;
use App\Http\Controllers\retroalimentacionEmpleadoController;
use App\Http\Controllers\consultarRetroalimentacionController;
use App\Http\Controllers\configurarVehiculoController;
use App\Http\Controllers\configuracionGeneralController;
use App\Http\Controllers\consultarOrdenCompraController;
use App\Http\Controllers\consultarCompraController;
use App\Http\Controllers\prestamosVehiculoController;
use App\Http\Controllers\abonoPrestamosVehiculoController;
use App\Http\Controllers\registrarOrdenCompraController;
use App\Http\Controllers\registrarCompraController;
use App\Http\Controllers\configuracionCXPController;
use App\Http\Controllers\configurarNominaController;
use App\Http\Controllers\registrarEmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/consultar-factura/{numerofactura?}', [consultarFacturaController::class, 'consultarFactura'])
    ->middleware(['auth'])
    ->name('consultar-factura');

Route::get('/consultar-cotizacion/{numerocotizacion?}', [consultarCotizacionController::class, 'consultarCotizacion'])
    ->middleware(['auth'])
    ->name('consultar-cotizacion-factura');

Route::get('/registrar-vehiculo/{vehiculo?}', [registrarVehiculoController::class, 'registrarVehiculo'])
    ->middleware(['auth'])
    ->name('registrar-vehiculo');

Route::get('/consultar-subasta/{numerosubasta?}', [consultarSubastaController::class, 'consultarSubasta'])
    ->middleware(['auth'])
    ->name('consultar-subasta');

Route::get('/consultar-renta/{numerorenta?}', [consultarRentaController::class, 'consultarRenta'])
    ->middleware(['auth'])
    ->name('consultar-renta');

Route::get('/consultar-nomina/{numeronomina?}', [consultarNominaController::class, 'consultarNomina'])
    ->middleware(['auth'])
    ->name('consultar-nomina');

Route::get('/registro-renta', [registrarRentaController::class, 'registroRenta'])
    ->middleware(['auth'])
    ->name('registro-renta');

Route::get('/registro-cliente', [registrarClienteController::class, 'registroCliente'])
    ->middleware(['auth'])
    ->name('registro-cliente');

Route::get('/registro-usuario', [registrarUsuarioController::class, 'registroUsuario'])
    ->middleware(['auth'])
    ->name('registro-usuario');

Route::get('/registro-suplidor', [registrarSuplidorController::class, 'registrosuplidor'])
    ->middleware(['auth'])
    ->name('registro-suplidor');

Route::get('/consultar-cotizacion/{numerocotizacion?}', [consultarCotizacionController::class, 'consultarCotizacion'])
    ->middleware(['auth'])
    ->name('consultar-cotizacion-factura');

Route::get('/consultar-subasta/{numerosubasta?}', [consultarSubastaController::class, 'consultarSubasta'])
    ->middleware(['auth'])
    ->name('consultar-subasta');

Route::get('/consultar-renta/{numerorenta?}', [consultarRentaController::class, 'consultarRenta'])
    ->middleware(['auth'])
    ->name('consultar-renta');

Route::get('/consultar-nomina/{numeronomina?}', [consultarNominaController::class, 'consultarNomina'])
    ->middleware(['auth'])
    ->name('consultar-nomina');

Route::get('/consultavehiculo/{numerovehiculo?}', [consultarVehiculoController::class, 'consultarVehiculo'])
    ->middleware(['auth'])
    ->name('consultavehiculo');

Route::get('/consultar-renta-cotizacion/{numerocotizacionRenta?}', [consultarcotizacionRentaController::class, 'consultarcotizacionRenta'])
    ->middleware(['auth'])
    ->name('consultar-renta-cotizacion');

Route::get('/factura/{factura?}', [registrarFacturaController::class, 'registrarFactura'])
    ->middleware(['auth'])
    ->name('factura');

Route::get('/registrarCotizacionFactura/{numerocotizacionfactura?}', [registrarCotizacionFacturaController::class, 'registrarCotizacionFactura'])
    ->middleware(['auth'])
    ->name('registrarCotizacionFactura');

Route::get('/cotizacion-renta', [registrarCotizacionRentaController::class, 'index'])
    ->middleware(['auth'])
    ->name('cotizacion-renta');

Route::get('/subasta', [registrarSubastaController::class, 'registrarSubasta'])
    ->middleware(['auth'])
    ->name('registrarSubasta');

Route::get('/consultar-cliente/{datocliente?}', [consultarClienteController::class, 'consultarCliente'])
    ->middleware(['auth'])
    ->name('consultar-cliente');

Route::get('/consultar-suplidor/{datosuplidor?}', [consultarSuplidorController::class, 'consultarsuplidor'])
    ->middleware(['auth'])
    ->name('consultar-suplidor');

Route::get('/historial-pagos/{numeropago?}', [historialPagosController::class, 'historialpagos'])
    ->middleware(['auth'])
    ->name('historial-pagos');

Route::get('/solicitud-prestamos-vehiculo/{numerosolicitudprestamo?}', [solicitudPrestamoVehiculoController::class, 'solicitudPrestamoVehiculo'])
    ->middleware(['auth'])
    ->name('solicitud-prestamos-vehiculo');

Route::get('/retroalimentacion-cliente/{documentocliente?}', [retroalimentacionClienteController::class, 'documentoCliente'])
    ->middleware(['auth'])
    ->name('retroalimentacion-cliente');

Route::get('/retroalimentacion-empleado/{documentoempleado?}', [retroalimentacionEmpleadoController::class, 'documentoEmpleado'])
    ->middleware(['auth'])
    ->name('retroalimentacion-empleado');

Route::get('/consultar-retroalimentacion/{casoretroalimentacion?}', [consultarRetroalimentacionController::class, 'casoRetroalimentacion'])
    ->middleware(['auth'])
    ->name('consultar-retroalimentacion');

Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/configurar-vehiculo/{configuracionvehiculo?}', [configurarVehiculoController::class, 'configuracionVehiculo'])
    ->middleware(['auth'])
    ->name('configurar-vehiculo');

Route::get('/configuracion-general/{configuraciongeneral?}', [configuracionGeneralController::class, 'configuracionGeneral'])
    ->middleware(['auth'])
    ->name('configuracion-general');

Route::get('/consultar-orden-compra/{codigoordencompra?}', [consultarOrdenCompraController::class, 'codigoOrdenCompra'])
    ->middleware(['auth'])
    ->name('consultar-orden-compra');

Route::get('/consultar-compra/{codigocompra?}', [consultarCompraController::class, 'codigoCompra'])
    ->middleware(['auth'])
    ->name('consultar-compra');

Route::get('/mantenimiento-prestamos-vehiculo{mantenimientoPrestamosVehiculo?}', [prestamosVehiculoController::class, 'mantenimientoPrestamosVehiculo'])
    ->middleware(['auth'])
    ->name('mantenimiento-prestamos-vehiculo');

Route::get('/Abonar-prestamo{abonarprestamo?}', [abonoPrestamosVehiculoController::class, 'abonarPrestamo'])
    ->middleware(['auth'])
    ->name('Abonar-prestamo');

Route::get('/registrar-orden-compra{numeroordencompra?}', [registrarOrdenCompraController::class, 'registrarOrdenCompra'])
    ->middleware(['auth'])
    ->name('registrar-orden-compra');

Route::get('/registrar-compra{numerocompra?}', [registrarCompraController::class, 'registrarCompra'])
    ->middleware(['auth'])
    ->name('registrar-compra');

Route::get('/configuracion-cxp/{configuracioncxp?}', [configuracionCXPController::class, 'configuracionCXP'])
    ->middleware(['auth'])
    ->name('configuracion-cxp');

Route::get('/configurar-nomina/{configurarnomina?}', [configurarNominaController::class, 'configurarNomina'])
    ->middleware(['auth'])
    ->name('configurar-nomina');

Route::get('/registrar-empleado{codigoempleado?}', [registrarEmpleadoController::class, 'codigoEmpleado'])
    ->middleware(['auth'])
    ->name('registrar-empleado');
