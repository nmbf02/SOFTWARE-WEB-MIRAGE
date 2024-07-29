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
                                {{-- Orden de mantenimiento --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Factura</h6>
                                    <div>
                                        <label for="color" class="block text-sm font-medium text-gray-700">Número de
                                            factura</label>
                                        <input type="text" placeholder="Número de factura"
                                            class="border p-2 rounded w-full">
                                    </div>
                                </div>
                                <div class="p-2"></div>

                                {{-- Datos de factura --}}
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos factura</h6>
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-4">
                                                <div>
                                                    <label for="color" class="block text-sm font-medium text-gray-700">Fecha de
                                                        contrato</label>
                                                    <input type="text" placeholder="Fecha factura"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color" class="block text-sm font-medium text-gray-700">Nombre del cliente</label>
                                                    <input type="text" placeholder="Nombre del cliente"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                                    <input type="text" placeholder="Nombre del cliente"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color" class="block text-sm font-medium text-gray-700">Identificación</label>
                                                    <input type="text" placeholder="Nombre del cliente"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color" class="block text-sm font-medium text-gray-700">Identificación</label>
                                                    <input type="text" placeholder="Nombre del cliente"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-4">
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">VIN</label>
                                                <input type="text" placeholder="VIN"
                                                       class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">Marca</label>
                                                <input readonly type="text" placeholder="Marca"
                                                       class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">Modelo</label>
                                                <input readonly type="text" placeholder="Modelo"
                                                       class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">Año</label>
                                                <input readonly type="text" placeholder="Año"
                                                       class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">Kilometraje</label>
                                                <input readonly type="text" placeholder="Kilometraje "
                                                       class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Asignacion de mantenimientos --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Próximos mantenimientos </h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                            <h1>Seleccione una o varias opciones</h1>
                                            @if(session('success'))
                                                <p>{{ session('success') }}</p>
                                            @endif
                                            <form action="/list" method="POST">
                                                @csrf
                                                <ul>
                                                    @foreach($items as $item)
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="items[]" value="{{ $item }}">
                                                                {{ $item }}
                                                            </label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <button type="submit">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Asignacion del mecanico --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Asignación</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                                            <div>
                                                <label for="color"
                                                       class="block text-sm font-medium text-gray-700">Mecanico</label>
                                                <select id="mecanicoMantenimiento" name="mecanicoMantenimiento"
                                                        class="border p-2 rounded w-full">
                                                    <option value="">Seleccionar</option>
                                                </select>
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
