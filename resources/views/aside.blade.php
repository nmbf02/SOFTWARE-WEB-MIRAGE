<!-- Sidebar -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<div class="flex overflow-hidden bg-white">
    {{-- <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div> --}}
    <aside id="sidebar"
        class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
        aria-label="Sidebar">
        <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                <div class="flex-1 px-3 bg-white divide-y space-y-1">
                    <div class="space-y-2 pt-2">
                        <!-- Subasta con subopciones -->
                        <div x-data="{ subastaOpen: false }">
                            <a href="#"
                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2"
                                @click.prevent="subastaOpen = !subastaOpen">
                                @include('icons/subasta')
                                <span class="ml-4">Subasta</span>
                                <svg :class="{ 'rotate-180': subastaOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 001.414 0L10 3.586l3.293 3.707a1 1 0 101.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Submenú para Subasta -->
                            <div x-show="subastaOpen" class="bg-gray-100 rounded-lg">
                                <a href="{{ route('registrarSubasta') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Registrar
                                </a>
                                <a href="{{ route('consultar-subasta') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Consultar
                                </a>
                            </div>
                        </div>

                        <!-- Renta -->
                        <div x-data="{ RentaOpen: false, CotizacionOpen: false }">
                            <a href="#"
                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2"
                                @click.prevent="RentaOpen = !RentaOpen">
                                @include('icons/Renta')
                                <span class="ml-4">Renta</span>
                                <svg :class="{ 'rotate-180': RentaOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 001.414 0L10 3.586l3.293 3.707a1 1 0 101.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Submenú para renta -->
                            <div x-show="RentaOpen" class="bg-gray-100 rounded-lg">
                                <a href="{{ route('registro-renta') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Rentar
                                </a>
                                <a href="{{ route('consultar-renta') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Consultar
                                </a>
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="CotizacionOpen = !CotizacionOpen">
                                    <span class="flex-grow">Cotización</span>
                                    <svg :class="{ 'rotate-180': CotizacionOpen }"
                                        class="h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 001.414 0L10 3.586l3.293 3.707a1 1 0 101.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Submenú para Cotización -->
                                <div x-show="CotizacionOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('cotizacion-renta') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Registrar
                                    </a>
                                    <a href="{{ route('consultar-renta-cotizacion') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Consultar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Venta -->
                        <div x-data="{ VentaOpen: false, CotizacionOpen: false }">
                            <a href="#"
                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2"
                                @click.prevent="VentaOpen = !VentaOpen">
                                @include('icons/venta')
                                <span class="ml-4">Venta</span>
                                <svg :class="{ 'rotate-180': VentaOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 001.414 0L10 3.586l3.293 3.707a1 1 0 101.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Submenú para venta -->
                            <div x-show="VentaOpen" class="bg-gray-100 rounded-lg">
                                <a href="/sales-register"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Facturar
                                </a>
                                <a href="{{ route('consultar-factura') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Consultar
                                </a>
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="CotizacionOpen = !CotizacionOpen">
                                    <span class="flex-grow">Cotización</span>
                                    <svg :class="{ 'rotate-180': CotizacionOpen }"
                                        class="h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 001.414 0L10 3.586l3.293 3.707a1 1 0 101.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Submenú para Cotización -->
                                <div x-show="CotizacionOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('registrarCotizacionFactura') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Registrar
                                    </a>
                                    <a href="{{ route('consultar-cotizacion-factura') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Consultar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Buscar --}}
                    <ul class="space-y-2 pb-2">
                        <li>
                            <form action="#" method="GET" class="lg:hidden">
                                <label for="mobile-search" class="sr-only">Buscar</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input type="text" name="email" id="mobile-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                        placeholder="Buscar">
                                </div>
                            </form>
                        </li>
                    </ul>
                    <div class="space-y-2 pb-2">
                        <!-- Menu de vehiculo -->
                        <div x-data="{ VehiculoOpen: false, MantenimientoOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="VehiculoOpen = !VehiculoOpen">
                                @include('icons/Vehiculo')
                                <span class="ml-3">Vehículo</span>
                                <svg :class="{ 'rotate-180': VehiculoOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <div x-show="VehiculoOpen" class="bg-gray-100 rounded-lg">
                                <a href="{{ route('configurationVehicle') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Configuración
                                </a>
                                <a href="{{ route('registerVehicle') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Registrar
                                </a>
                                <a href="{{ route('consultavehiculo') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Consultar
                                </a>
                            </div>
                        </div>
                        <!-- Mantenimiento con sus submenús y opciones -->
                        <div x-data="{ MantenimientoOpen: false, PruebaConduccionOpen: false, MantenimientoVehiculoOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="MantenimientoOpen = !MantenimientoOpen">
                                <!-- Icono de Mantenimiento -->
                                @include('icons/mantenimiento')
                                <span class="ml-3">Mantenimiento</span>
                                <svg :class="{ 'rotate-180': MantenimientoOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú de Mantenimiento -->
                            <div x-show="MantenimientoOpen" class="pl-10 bg-gray-100 rounded-lg">
                                <a href="{{ route('consultar-sugerencia') }}"
                                   class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Sugerencia
                                </a>
                                <a href="{{ route('configuracion-mantenimiento') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Configuración
                                </a>
                                {{-- <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                    @click.prevent="PruebaConduccionOpen = !PruebaConduccionOpen">
                                    Prueba de conducción
                                    <svg :class="{ 'rotate-180': PruebaConduccionOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú de Prueba de conducción -->
                                <div x-show="PruebaConduccionOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('solicitud-cita') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2">
                                        Solicitud de cita
                                    </a>
                                    <a href="{{ route('prueba-conduccion') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2">
                                        Prueba de conducción
                                    </a>
                                </div> --}}
                                <a href="{{ route('orden-reparacion') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Orden de reparación
                                </a>
                                <a href="#"
                                   class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                   @click.prevent="MantenimientoVehiculoOpen = !MantenimientoVehiculoOpen">
                                    Servicios de vehículo
                                    <svg :class="{ 'rotate-180': MantenimientoVehiculoOpen }"
                                         class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú de Mantenimiento de vehiculo -->
                                <div x-show="MantenimientoVehiculoOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('mantenimiento-vehiculo') }}"
                                       class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2">
                                        Registro
                                    </a>
                                    <a href="{{ route('consultar-mantenimiento-vehiculo') }}"
                                       class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2">
                                        Consulta
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- Inventario --}}
                        <div x-data="{ InventarioOpen: false, mantenimientoOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="InventarioOpen = !InventarioOpen">
                                <!-- Icono de Mantenimiento -->
                                @include('icons/inventario')
                                <span class="ml-3">Inventario</span>
                                <svg :class="{ 'rotate-180': InventarioOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú de inventario -->
                            <div x-show="InventarioOpen" class="pl-10 bg-gray-100 rounded-lg">
                                <a href="{{ route('configurar-inventario') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Configuración
                                </a>
                                <a href="{{ route('registrar-inventario') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Registrar
                                </a>
                                <a href="{{ route('consultar-inventario') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Consultar
                                </a>
                            </div>
                        </div>
                        {{-- Cuentas por cobrar --}}
                        <div x-data="{ cuentasPorCobrarOpen: false, ordenCompraOpen: false, compraOpen: false, registrarCXCOpen: false, consultarCXCOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="cuentasPorCobrarOpen = !cuentasPorCobrarOpen">
                                @include('icons/cuentasporcobrar')
                                <span class="ml-3">Cuentas por cobrar</span>
                                <svg :class="{ 'rotate-180': cuentasPorCobrarOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú para Cuentas por cobrar -->
                            <div x-show="cuentasPorCobrarOpen" class="bg-gray-100 rounded-lg">
                                <div x-data="{ registrarCXCOpen: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="registrarCXCOpen = !registrarCXCOpen">
                                        Registrar
                                        <svg :class="{ 'rotate-180': registrarCXCOpen }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="registrarCXCOpen" class="bg-gray-200 rounded-lg">
                                        <a href="/customer-register"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Cliente
                                        </a>
                                    </div>
                                </div>
                                <div x-data="{ consultarCXCOpen: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="consultarCXCOpen = !consultarCXCOpen">
                                        Consultar
                                        <svg :class="{ 'rotate-180': consultarCXCOpen }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="consultarCXCOpen" class="bg-gray-200 rounded-lg">
                                        <a href="{{ route('consultar-cliente') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Cliente
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Cuentas por pagar --}}
                        <div x-data="{ cuentasPorPagarOpen: false, ordenCompraOpen: false, compraOpen: false, consultarCXPOpen: false, registrarCXPOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="cuentasPorPagarOpen = !cuentasPorPagarOpen">
                                @include('icons/cuentasporpagar')
                                <span class="ml-3">Cuentas por pagar</span>
                                <svg :class="{ 'rotate-180': cuentasPorPagarOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú para Cuentas por pagar -->
                            <div x-show="cuentasPorPagarOpen" class="bg-gray-100 rounded-lg">
                                <div x-data="{ MantenimientoCXP: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="MantenimientoCXP = !MantenimientoCXP">
                                        Mantenimiento
                                        <svg :class="{ 'rotate-180': MantenimientoCXP }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="MantenimientoCXP" class="bg-gray-200 rounded-lg">
                                        <a href="{{ route('configuracion-cxp') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Configuración
                                        </a>
                                    </div>
                                </div>
                                <div x-data="{ registrarCXPOpen: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="registrarCXPOpen = !registrarCXPOpen">
                                        Registrar
                                        <svg :class="{ 'rotate-180': registrarCXPOpen }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="registrarCXPOpen" class="bg-gray-200 rounded-lg">
                                        <a href="{{ route('registro-suplidor') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Suplidor
                                        </a>
                                    </div>
                                </div>
                                <div x-data="{ consultarCXPOpen: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="consultarCXPOpen = !consultarCXPOpen">
                                        Consultar
                                        <svg :class="{ 'rotate-180': consultarCXPOpen }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="consultarCXPOpen" class="bg-gray-200 rounded-lg">
                                        <a href="{{ route('consultar-suplidor') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Suplidor
                                        </a>
                                    </div>
                                </div>
                                <!-- Submenú para Orden de compra -->
                                <div x-data="{ ordenCompraOpen: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="ordenCompraOpen = !ordenCompraOpen">
                                        Orden de compra
                                        <svg :class="{ 'rotate-180': ordenCompraOpen }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="ordenCompraOpen" class="bg-gray-200 rounded-lg">
                                        <a href="{{ route('registrar-orden-compra') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Registrar
                                        </a>
                                        <a href="{{ route('consultar-orden-compra') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Consultar
                                        </a>
                                    </div>
                                </div>
                                <!-- Submenú para Compra -->
                                <div x-data="{ compraOpen: false }" class="pl-10">
                                    <a href="#"
                                        class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2"
                                        @click.prevent="compraOpen = !compraOpen">
                                        Compra
                                        <svg :class="{ 'rotate-180': compraOpen }"
                                            class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>
                                    <div x-show="compraOpen" class="bg-gray-200 rounded-lg">
                                        <a href="{{ route('registrar-compra') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Registrar
                                        </a>
                                        <a href="{{ route('consultar-compra') }}"
                                            class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                            Consultar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Prestamo --}}
                        <div x-data="{ PrestamosOpen: false, grupoOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="PrestamosOpen = !PrestamosOpen">
                                @include('icons/prestamo')
                                <span class="ml-3">Préstamos</span>
                                <svg :class="{ 'rotate-180': PrestamosOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú para prestamos -->
                            <div x-show="PrestamosOpen" class="bg-gray-100 rounded-lg">
                                <a href="{{ route('mantenimiento-prestamos-vehiculo') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Mantenimiento
                                </a>
                                <a href="{{ route('solicitud-prestamos-vehiculo') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Solicitud
                                </a>
                                <a href="{{ route('Abonar-prestamo') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Abonar
                                </a>
                                <a href="{{ route('historial-pagos') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10">
                                    Historial de Pagos
                                </a>
                            </div>
                        </div>
                        {{-- Reporte - analisis --}}
                        <div x-data="{ reporteAnalisisOpen: false }">
                            <a href="#"
                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group"
                                @click.prevent="reporteAnalisisOpen = !reporteAnalisisOpen">
                                @include('icons/reporte-analisis')
                                <span class="ml-3 flex-1 whitespace-nowrap">Reporte - Análisis</span>
                                <svg :class="{ 'rotate-180': reporteAnalisisOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú para Reporte - Análisis -->
                            <div x-show="reporteAnalisisOpen" class="bg-gray-100 rounded-lg pl-10">
                                <a href="{{ route('retroalimentacion-cliente') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Retroalimentación cliente
                                </a>
                                <a href="{{ route('retroalimentacion-empleado') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Retroalimentación empleado
                                </a>
                                <a href="{{ route('consultar-retroalimentacion') }}"
                                    class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2">
                                    Consultar retroalimentación
                                </a>
                            </div>
                        </div>
                        {{-- Nomina --}}
                        <div x-data="{ nominaOpen: false, mantenimientoOpen: false, ReporteOpen: false, ConsultarOpen: false, registrarNominaOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="nominaOpen = !nominaOpen">
                                @include('icons/nomina')
                                <span class="ml-3">Nómina</span>
                                <svg :class="{ 'rotate-180': nominaOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú para Nómina -->
                            <div x-show="nominaOpen" class="bg-gray-100 rounded-lg">
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="mantenimientoOpen = !mantenimientoOpen">
                                    Mantenimiento
                                    <svg :class="{ 'rotate-180': mantenimientoOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú de Mantenimiento -->
                                <div x-show="mantenimientoOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('configurar-nomina') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Configuración
                                    </a>
                                </div>
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="registrarNominaOpen = !registrarNominaOpen">
                                    Registrar
                                    <svg :class="{ 'rotate-180': registrarNominaOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú para Reporte -->
                                <div x-show="registrarNominaOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('registrar-empleado') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Empleado
                                    </a>
                                    <a href="#"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Nomina
                                    </a>
                                </div>
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="ConsultarOpen = !ConsultarOpen">
                                    Consultar
                                    <svg :class="{ 'rotate-180': ConsultarOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú para Consultar -->
                                <div x-show="ConsultarOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('consultar-empleado') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Empleado
                                    </a>
                                    <a href="{{ route('consultar-nomina') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Nomina
                                    </a>
                                </div>
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="ReporteOpen = !ReporteOpen">
                                    Reporte
                                    <svg :class="{ 'rotate-180': ReporteOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú para Reporte -->
                                <div x-show="ReporteOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="#"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Empleados
                                    </a>
                                    <a href="#"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Deducciones empleados
                                    </a>
                                    <a href="#"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Horas extras por empleados
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2 pt-2">
                        {{-- Configuracion --}}
                        <a href="/general-configuration"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                            @include('icons/configuracion')
                            <span class="ml-3">Configuración</span>
                        </a>
                        {{-- Usuarios --}}
                        <div x-data="{ usuarioOpen: false, grupoOpen: false, registrarUsuarioOpen: false }">
                            <a href="#"
                                class="flex items-center text-base text-gray-900 font-normal rounded-lg p-2 hover:bg-gray-100 group"
                                @click.prevent="usuarioOpen = !usuarioOpen">
                                @include('icons/usuario')
                                <span class="ml-3">Usuario</span>
                                <svg :class="{ 'rotate-180': usuarioOpen }"
                                    class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <!-- Submenú para Usuario -->
                            <div x-show="usuarioOpen" class="bg-gray-100 rounded-lg">
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="registrarUsuarioOpen = !registrarUsuarioOpen">
                                    Registrar
                                    <svg :class="{ 'rotate-180': registrarUsuarioOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú para Grupo -->
                                <div x-show="registrarUsuarioOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a href="{{ route('registro-usuario') }}"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Usuario
                                    </a>
                                </div>
                                <a href="#"
                                    class="flex items-center text-base text-gray-900 font-normal rounded-lg hover:bg-gray-200 transition duration-75 p-2 pl-10"
                                    @click.prevent="grupoOpen = !grupoOpen">
                                    Grupo
                                    <svg :class="{ 'rotate-180': grupoOpen }"
                                        class="ml-auto h-5 w-5 transform transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <!-- Submenú para Grupo -->
                                <div x-show="grupoOpen" class="pl-10 bg-gray-200 rounded-lg">
                                    <a ref="#"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Crear grupo
                                    </a>
                                    <a href="#"
                                        class="block text-base text-gray-900 font-normal rounded-lg hover:bg-gray-300 transition duration-75 p-2 pl-10">
                                        Modificar grupo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ configuracionOpen: false, LocalizacionOpen: false }">
                        </div>
                        {{-- Configuracion --}}
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();" target=""
                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                @include('icons/cerrarsesion')
                                <span class="ml-3">Cerrar sesión</span>
                            </a>
                        </form>
                        {{-- Ayuda --}}
                        <a href="javascript:void(0)"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2"
                            id="helpButton">
                            @include('icons/ayuda')
                            <span class="ml-3">Ayuda</span>
                        </a>
                        {{-- <a href="#" target="_blank"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                            @include('icons/ayuda')
                            <span class="ml-3">Ayuda</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/downloadHelper.js') }}"></script>
