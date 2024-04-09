<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rentar') }}
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
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Rentar
                                    </h1>
                                </div>
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
                                                                {{ __('Cotización') }}
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
                            <form>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del cliente</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código del cliente" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Número
                                                    de identidad</label>
                                                <input type="number" placeholder="Documento"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Licencia</label>
                                                <input type="number" placeholder="Licencia"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Condición de
                                                    renta</label>
                                                <input type="text" placeholder="Condición de renta"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="Teléfono"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="text" placeholder="Email" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Dirección</label>
                                            <input type="text" placeholder="Dirección"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">VEHÍCULO</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">VIN</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Nombre del vehículo" class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Cantidad</label>
                                                <input type="number" placeholder="Cant."
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Descuento</label>
                                                <input type="number" placeholder="Desc."
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Precio</label>
                                            <input type="number" placeholder="Precio"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">ITBIS</label>
                                                <input type="text" placeholder="Subtotal"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Subtotal</label>
                                                <input type="text" placeholder="Subtotal"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Total</label>
                                            <input type="number" placeholder="TOTAL"
                                                class="border p-2 rounded text-red-700 border-red-700 font-extrabold w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Configuración de renta</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Fecha inicio</label>
                                            <input type="date" placeholder="Fecha inicio" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Fecha fin</label>
                                            <input type="date" placeholder="Fecha fin" class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Cant. de días</label>
                                                <input type="text" placeholder="Cant. de días" class="border p-2 rounded w-full">
                                            </div>
                                            <div class="mb-4">
                                                <label for="SegmentoMercado"
                                                    class="block text-sm font-medium text-gray-700">Lapso de tiempo</label>
                                                <select id="SegmentoMercado" class="border p-2 rounded w-full">
                                                    <option value="1">Días</option>
                                                    <option value="2">Meses</option>
                                                    <option value="3">Años</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Válido hasta</label>
                                                <input type="date" placeholder="Válido hasta<"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Forma de pago</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Modalidades de pago</label>
                                            <div class="flex items-center mb-4">
                                                <input id="contado" type="radio" name="modalidadPago" value="contado" class="text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                <label for="contado" class="ml-2 block text-sm text-gray-900">Al contado</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="prestamo" type="radio" name="modalidadPago" value="prestamo" class="text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                <label for="prestamo" class="ml-2 block text-sm text-gray-900">Préstamo</label>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Descuento a factura</label>
                                                <input type="number" placeholder="Fecha de pago"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">ITBIS total</label>
                                                <input type="text" placeholder="Plazo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto a pagar</label>
                                            <input type="number" placeholder="TOTAL"
                                                class="border p-2 rounded text-red-700 border-red-700 font-extrabold w-full">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto inicial</label>
                                            <input type="number" placeholder="Monto inicial"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto faltante</label>
                                            <input type="text" placeholder="Monto faltante"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha de pago</label>
                                                <input type="number" placeholder="Fecha de pago"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Plazo</label>
                                                <input type="text" placeholder="Plazo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Plazo máximo</label>
                                                <input type="text" placeholder="Plazo máximo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Plazo mínimo</label>
                                                <input type="text" placeholder="Plazo mínimo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tasa de interés</label>
                                                <input type="text" placeholder="Tasa de interés"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar renta') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include ('footer')
    <script src="/js/paginacion.js"></script>
</x-app-layout>
