<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Retroalimentación empleado') }}
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
                                        Retroalimentación empleado</h1>
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
                                                                {{ __('Retroalimentación cliente') }}
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
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del caso</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 items-center">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código de
                                                    retroalimentación</label>
                                                <input type="text" placeholder="Código de retroalimentación"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código del
                                                    cliente</label>
                                                <input type="text" placeholder="Código del cliente"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Cliente</label>
                                            <input type="text" placeholder="Cliente"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Tipo
                                                retroalimentación</label>
                                            <input type="text" placeholder="Tipo retroalimentación"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="comentario"
                                                class="block text-sm font-medium text-gray-700">Comentario del
                                                cliente</label>
                                            <textarea id="comentario" name="comentario" rows="4" class="border p-2 rounded w-full"
                                                placeholder="Comentario del cliente..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del cliente</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4 items-center">
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
                                                    factura</label>
                                                <input type="text" placeholder="Condición de fact."
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
                                            <input type="text" placeholder="Email"
                                                class="border p-2 rounded w-full">
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
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Caso</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Acción tomada</label>
                                                <input type="date" placeholder="Acción tomada"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha
                                                    de la acción</label>
                                                <input type="date" placeholder="Fecha de la acción"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="comentario"
                                                class="block text-sm font-medium text-gray-700">Detalle de lo realizado</label>
                                            <textarea id="comentario" name="comentario" rows="4" class="border p-2 rounded w-full"
                                                placeholder="Detalle lo realizado..."></textarea>
                                        </div>
                                        <div>
                                            <label for="comentario"
                                                class="block text-sm font-medium text-gray-700">Nota</label>
                                            <textarea id="comentario" name="comentario" rows="4" class="border p-2 rounded w-full"
                                                placeholder="Escribe tu nota aquí..."></textarea>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha
                                                    actual</label>
                                                <input type="date" placeholder="Fecha actual"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha
                                                    trabajada</label>
                                                <input type="date" placeholder="Fecha trabajada"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Vía de
                                                    comunicación</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccione un canal de comunicación</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Nivel de
                                                    prioridad</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Nivel</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Movimiento de
                                                    retroalimentación</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccione un movimiento</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">¿Quién lo trabajó? </label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccione un empleado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Fecha</label>
                                            <input type="date" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="verificacion_empresa"
                                                name="verificacion_empresa" class="rounded">
                                            <label for="verificacion_empresa"
                                                class="text-sm font-medium text-gray-700">Verificación por parte de la
                                                empresa</label>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Salvar retroalimentacion') }}
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
