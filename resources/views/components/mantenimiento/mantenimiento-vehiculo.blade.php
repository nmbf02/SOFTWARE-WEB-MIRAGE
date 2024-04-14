<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mantenimiento de vehículo') }}
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
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Mantenimiento de vehículo</h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form>
                                {{-- Orden de reparación --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Orden de reparación</h6>
                                    <div>
                                        <label for="color" class="block text-sm font-medium text-gray-700">Número de
                                            orden</label>
                                        <input type="text" placeholder="Número de orden"
                                            class="border p-2 rounded w-full">
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    {{-- Datos de mantenimiento --}}
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del mantenimiento</h6>
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tipo
                                                    de mantenimiento</label>
                                                <select id="porcentajeMora" name="porcentajeMora"
                                                    class="border p-2 rounded w-full">
                                                    <option value="">Seleccionar</option>
                                                </select>
                                            </div>
                                            <div>
                                                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Notas del chequeo..."
                                                    class="border p-2 rounded w-full"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Monto a pagar --}}
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Gastos por manteniminto</h6>
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                                <div>
                                                    <label for="color" class="block text-sm font-medium text-gray-700">Monto</label>
                                                    <input type="number" placeholder="Monto gastado"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Moneda</label>
                                                    <select id="porcentajeMora" name="porcentajeMora"
                                                        class="border p-2 rounded w-full">
                                                        <option value="">Seleccionar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar mantenimiento') }}
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
