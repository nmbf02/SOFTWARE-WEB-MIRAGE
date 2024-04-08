<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuraciones de vehículos') }}
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
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Configuraciones de vehículos
                                    </h1>
                                </div>
                                {{-- <div class="inline-flex items-center justify-center space-x-2 mr-3">
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
                                </div> --}}
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Destino</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Finalidad del
                                                vehiculo</label>
                                            <input type="text" placeholder="Renta, venta o subasta..."
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar') }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Modelo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Código
                                                del modelo</label>
                                            <input type="text" placeholder="Código del modelo"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Marca</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una marca</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar modelo') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Marca</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Código
                                                de la marca</label>
                                            <input type="text" placeholder="Código de la marca"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Grupo
                                                del vehículo</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un grupo</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar marca') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Grupo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Código
                                                del grupo</label>
                                            <input type="text" placeholder="Código del grupo"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar grupo') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Color exterior</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                del color</label>
                                            <input type="text" placeholder="Código del color"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Acabado del
                                                vehículo</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un acabado</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar color exterior') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Acabado del vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código del
                                                acabado</label>
                                            <input type="text" placeholder="Código del acabado"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar color acabado') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Estado del vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Estado del
                                                vehículo</label>
                                            <input type="text" placeholder="Estado del vehículo"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar estado') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Ubicación</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Ubicación</label>
                                            <input type="text" placeholder="Código del color"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Almacén</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un almacén</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar color exterior') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Almacén</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Almacén</label>
                                            <input type="text" placeholder="Código del color"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sucursal</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una sucursal</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar almacén') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Seguro del vehiculo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Seguro</label>
                                            <input type="text" placeholder="Código del seguro"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Aseguradora</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una aseguradora</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar seguro') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Transmisión del vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código de
                                                transmisión</label>
                                            <input type="text" placeholder="Código de transmisión"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar transmisión') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tracción del vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código de
                                                tracción</label>
                                            <input type="text" placeholder="Código de tracción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tracción') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo de vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código del tipo</label>
                                            <input type="text" placeholder="Código de tracción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tipo') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Segmento de vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código del
                                                segmento</label>
                                            <input type="text" placeholder="Código de tracción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar segmento') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Clasificación del vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código del
                                                segmento</label>
                                            <input type="text" placeholder="Código de tracción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar clasificación') }}
                                        </x-button>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo Itbis</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Codigo del
                                                    ITBIS</label>
                                                <input type="text" placeholder="Código del ITBIS"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Porcentaje</label>
                                                <input type="number" placeholder="% ITBIS"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar ITBIS') }}
                                        </x-button>
                                    </div>
                                </div>
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
