<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Facturación') }}
        </h2>
    </x-slot>
    @include ('aside')

    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                        <div class="bg-white dark:bg-gray-700 {{-- shadow rounded-lg --}} p-6">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Facturación
                                    </h1>
                                </div>
                                {{-- Cargar datos desde otra factura --}}
                                <div class="inline-flex items-center justify-center space-x-2 mr-3">
                                    <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                        <div class="sm:flex sm:items-center ">
                                            <div class="relative">
                                                <x-dropdown align="right" width="60">
                                                    <x-slot name="trigger">
                                                        <span class="inline-flex rounded-md">
                                                            <button type="button"
                                                                class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-black bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 active:bg-gray-100 transition ease-in-out duration-150">
                                                                <span class="ml-2 hidden sm:inline-block">Cargar
                                                                    datos</span>
                                                                <svg class="ml-2 -mr-0.5 h-4 w-4 hidden sm:inline-block"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                                </svg>
                                                                <div class="block sm:hidden">
                                                                    @include('icons/subir')
                                                                </div>
                                                            </button>
                                                        </span>
                                                    </x-slot>

                                                    <x-slot name="content">
                                                        <div class="w-60">
                                                            <!-- Team Management -->
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Cargar datos') }}
                                                            </div>

                                                            <!-- Team Settings -->
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Venta') }}
                                                            </x-dropdown-link>
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Cotización') }}
                                                            </x-dropdown-link>
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Préstamo de solicitud') }}
                                                            </x-dropdown-link>
                                                        </div>
                                                    </x-slot>
                                                </x-dropdown>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form method="GET" action="{{ route('salesRegister') }}">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="clienteFactura" class="block text-sm font-medium text-gray-700">Cliente</label>
                                        <select name="clienteFactura" id="clienteFactura" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Seleccione un cliente" onchange="this.form.submit()">
                                            <option value="">Seleccionar cliente</option>
                                            @foreach ($clienteFactura as $cliente)
                                                <option value="{{ $cliente->IdCliente }}" {{ $requestClienteFactura == $cliente->IdCliente ? 'selected' : '' }}>
                                                    {{ $cliente->persona->Nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for="vehiculoFactura" class="block text-sm font-medium text-gray-700">Vehículo</label>
                                        <select name="vehiculoFactura" id="vehiculoFactura" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Seleccione un vehículo" onchange="this.form.submit()">
                                            <option value="">Seleccionar vehículo</option>
                                            @foreach ($descripcionvehiculo as $factura)
                                            <option value="{{ $factura->IdVehiculo }}" {{ $requestVehicleFactura == $factura->IdVehiculo ? 'selected' : '' }}>
                                                {{ $factura->Descripcion }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <div class="p-2"></div>
                            <form method="POST" action="{{ route('RegitrarFactura.store') }}">
                                @csrf
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    {{-- Cliente --}}
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del cliente</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        {{-- <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input name="codigocliente" type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div> --}}
                                        <div>
                                            <label for="clienteFactura"
                                                class="block text-sm font-medium text-gray-700">Cliente</label>
                                                <input type="text" name="clienteFactura"
                                                value="{{ isset($client->IdCliente) ? $client->IdCliente : '' }}"
                                                style="display:none"
                                                readonly>
                                            <input type="text"  id="clienteFactura"
                                                value="{{ isset($client->persona->Nombre) ? $client->persona->Nombre : '' }}"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                readonly>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Licencia</label>
                                            <input
                                                value="{{ isset($client->categoriaLicencia->Descripcion) ? $client->categoriaLicencia->Descripcion : '' }}"
                                                name="licenciacliente" type="text" placeholder="Licencia"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Condición de
                                                factura</label>
                                            <input value="{{ $client->IdCondicionFactura }}" name="condicioncliente"
                                                type="text" placeholder="Condición de fact."
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        {{-- <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input name="nombrecliente" type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full"  >
                                        </div> --}}
                                        {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4"> --}}
                                        {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Número
                                                    de identidad</label>
                                                <input name="documentocliente" type="number" placeholder="Documento"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                        {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Licencia</label>
                                                <input name="licenciacliente" type="number" placeholder="Licencia"
                                                    class="border p-2 rounded w-full"  >
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Condición de
                                                    factura</label>
                                                <input name="condicioncliente" type="text"
                                                    placeholder="Condición de fact." class="border p-2 rounded w-full"
                                                     >
                                            </div> --}}
                                        {{-- </div> --}}
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input
                                                value="{{ isset($client->persona->Telefono) ? $client->persona->Telefono : '' }}"
                                                name="telefonocliente" type="text" placeholder="Teléfono"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input
                                                value="{{ isset($client->persona->Email) ? $client->persona->Email : '' }}"
                                                name="emailcliente" type="text" placeholder="Email"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sector</label>
                                            <input
                                                value="{{ isset($client->persona->Sector->Descripcion) ? $client->persona->Sector->Descripcion : '' }}"
                                                name="sectorcliente" type="text" placeholder="Sector"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                {{-- Vehiculo --}}

                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">DATOS DEL VEHÍCULO</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">VIN</label>
                                            <input value="{{ isset($vehicle->VIN) ? $vehicle->VIN : '' }}"
                                                name="VINvehiculo" type="text" placeholder="VIN"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        <div>
                                            <label for="descripcionvehiculo"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                                <input
                                                value="{{ isset($vehicle->IdVehiculo) ? $vehicle->IdVehiculo : '' }}"
                                                name="idvehiculo" type="text" placeholder="Descripción"
                                                style="display:none;" readonly>
                                            <input
                                                value="{{ isset($vehicle->Descripcion) ? $vehicle->Descripcion : '' }}"
                                                name="descripcionvehiculo" type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Cantidad</label>
                                                <input name="cantidadvehiculo" type="number" placeholder="Cant."
                                                    class="border p-2 rounded w-full" >
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Descuento</label>
                                                <input value="0" name="descuentovehiculo" type="number" placeholder="Descuento"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Precio</label>
                                            <input value="{{ isset($vehicle->Precio) ? $vehicle->Precio : '' }}"
                                                name="preciovehiculo" type="number" placeholder="Precio"
                                                class="border p-2 rounded w-full" readonly>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">ITBIS</label>
                                                <input name="itbisvehiculo" type="text"
                                                    placeholder="ITBIS Vehiculo" class="border p-2 rounded w-full"
                                                    readonly>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Subtotal</label>
                                                <input name="subtotalvehiculo" type="text" placeholder="Subtotal"
                                                    class="border p-2 rounded w-full" readonly>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Total</label>
                                            <input name="totalvehiculo" type="number" placeholder="TOTAL"
                                                class="border p-2 rounded text-red-700 border-red-700 font-extrabold w-full"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                {{-- Forma de pago --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Forma de pago</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Modalidades de
                                                pago</label>
                                            <div class="flex items-center mb-4">
                                                <input id="contado" type="radio" name="modalidadPago"
                                                    value="contado"
                                                    class="text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                <label for="contado" class="ml-2 block text-sm text-gray-900">Al
                                                    contado</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="prestamo" type="radio" name="modalidadPago"
                                                    value="prestamo"
                                                    class="text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                <label for="prestamo"
                                                    class="ml-2 block text-sm text-gray-900">Préstamo</label>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4"> --}}
                                            <div>
                                                <label for="monedafactura"
                                                    class="block text-sm font-medium text-gray-700">Moneda</label>
                                                <select name="monedafactura" id="monedafactura"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Seleccione una moneda">
                                                    @foreach ($monedafactura as $moneda)
                                                        <option value="{{ $moneda->IdMoneda }}">
                                                            {{ $moneda->Descripcion }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Descuento a
                                                    factura</label>
                                                <input name="descuentofactura" type="number"
                                                    placeholder="Fecha de pago" class="border p-2 rounded w-full"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Subtotal</label>
                                                <input name="subtotalfactura" type="text" placeholder="Subtotal"
                                                    class="border p-2 rounded w-full" readonly>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">ITBIS total</label>
                                                <input name="itbisfactura" type="text" placeholder="ITBIS"
                                                    class="border p-2 rounded w-full" readonly>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto a
                                                pagar</label>
                                            <input name="montoapagar" type="number" placeholder="TOTAL"
                                                class="border p-2 rounded text-red-700 border-red-700 font-extrabold w-full"
                                                readonly>
                                        </div>
                                    </div>
                                    {{-- Se hara despues --}}
                                    {{-- <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto inicial</label>
                                            <input name="montoinicial" type="number" placeholder="Monto inicial"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto
                                                solicitado</label>
                                            <input name="montosolicitado" type="text"
                                                placeholder="Monto solicitado" class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha de
                                                    pago</label>
                                                <input name="fechapago" type="number" placeholder="Fecha de pago"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Plazo</label>
                                                <input name="plazopago" type="text" placeholder="Plazo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Plazo
                                                    máximo</label>
                                                <input name="plazomaximo" type="text" placeholder="Plazo máximo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Plazo
                                                    mínimo</label>
                                                <input name="plazominimo" type="text" placeholder="Plazo mínimo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tasa de
                                                    interés</label>
                                                <input name="tasainteres" type="text"
                                                    placeholder="Tasa de interés" class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar factura') }}
                                </x-button>
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const cantidadInput = document.querySelector('input[name="cantidadvehiculo"]');
                                    const descuentoInput = document.querySelector('input[name="descuentovehiculo"]');
                                    const precioInput = document.querySelector('input[name="preciovehiculo"]');
                                    const itbisInput = document.querySelector('input[name="itbisvehiculo"]');
                                    const subtotalInput = document.querySelector('input[name="subtotalvehiculo"]');
                                    const totalInput = document.querySelector('input[name="totalvehiculo"]');

                                    const descuentoFacturaInput = document.querySelector('input[name="descuentofactura"]');
                                    const subtotalFacturaInput = document.querySelector('input[name="subtotalfactura"]');
                                    const itbisFacturaInput = document.querySelector('input[name="itbisfactura"]');
                                    const montoAPagarInput = document.querySelector('input[name="montoapagar"]');

                                    function calcularValores() {
                                        const precio = parseFloat(precioInput.value) || 0;
                                        const cantidad = parseInt(cantidadInput.value) || 0;
                                        const descuentoPorcentaje = parseFloat(descuentoInput.value) || 0;

                                        const baseSubtotal = precio * cantidad;
                                        const descuento = baseSubtotal * (descuentoPorcentaje / 100);
                                        const subtotal = baseSubtotal - descuento;
                                        const itbis = subtotal * 0.18;
                                        const total = subtotal + itbis;

                                        // Actualizar los campos de vehículo
                                        itbisInput.value = itbis.toFixed(2);
                                        subtotalInput.value = subtotal.toFixed(2);
                                        totalInput.value = total.toFixed(2);

                                        // Actualizar los campos adicionales de la factura
                                        descuentoFacturaInput.value = descuento.toFixed(2);
                                        subtotalFacturaInput.value = subtotal.toFixed(2);
                                        itbisFacturaInput.value = itbis.toFixed(2);
                                        montoAPagarInput.value = total.toFixed(2);
                                    }

                                    cantidadInput.addEventListener('input', calcularValores);
                                    descuentoInput.addEventListener('input', calcularValores);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#vehiculoFactura').select2({
                placeholder: "Seleccione un vehículo",
                allowClear: true
            });
        });

        $(document).ready(function() {
        $('#clienteFactura').select2({
            placeholder: "Seleccione un cliente",
            allowClear: true
        });
    });
    </script>

    <script src="{{ asset('js/calculoVenta.js') }}"></script>
    @include ('footer')
</x-app-layout>
