<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orden de reparación') }}
        </h2>
    </x-slot>
    @include ('aside')

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">
    @endsection
    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                        <div class="bg-white dark:bg-gray-700 {{-- shadow rounded-lg --}} p-6">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Orden de
                                        reparación
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form>
                                {{-- Suplidor --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Suplidor</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código</label>
                                                <input type="text" placeholder="Código"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Condición</label>
                                                <select id="porcentajeMora" name="porcentajeMora"
                                                    class="border p-2 rounded w-full">
                                                    <option value="">Seleccionar condición</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                </div>
                                {{-- Vehiculo --}}
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">VEHÍCULO</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">VIN</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Nombre del vehículo"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                </div>
                                {{-- Datos del tiempo --}}
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del tiempo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            actual</label>
                                                        <input type="date" placeholder="Fecha actual"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Empleado</label>
                                                        <select id="porcentajeMora" name="porcentajeMora"
                                                            class="border p-2 rounded w-full">
                                                            <option value="">Seleccionar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                        <div>
                                                            <label for="color"
                                                                class="block text-sm font-medium text-gray-700">Fecha
                                                                entrada</label>
                                                            <input type="date" placeholder="Fecha entrada"
                                                                class="border p-2 rounded w-full">
                                                        </div>
                                                        <div>
                                                            <label for="color"
                                                                class="block text-sm font-medium text-gray-700">Fecha
                                                                salida</label>
                                                            <input type="date" placeholder="Fecha salida"
                                                                class="border p-2 rounded w-full">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            estimada</label>
                                                        <input type="date" placeholder="Fecha estimada"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Datos de reparacion --}}
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos de la reparación</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tipo
                                                    reparación</label>
                                                <select id="porcentajeMora" name="porcentajeMora"
                                                    class="border p-2 rounded w-full">
                                                    <option value="">Seleccionar</option>
                                                </select>
                                            </div>
                                            <div>
                                                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Detalles de la reparación..."
                                                    class="border p-2 rounded w-full"></textarea>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Estado de la reparación</label>
                                                <select id="porcentajeMora" name="porcentajeMora"
                                                    class="border p-2 rounded w-full">
                                                    <option value="">Seleccionar</option>
                                                </select>
                                            </div>
                                            <div>
                                                <textarea id="descripcion" name="" rows="4" placeholder="Observación ..."
                                                    class="border p-2 rounded w-full"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar reparación') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('footer')
</x-app-layout>
