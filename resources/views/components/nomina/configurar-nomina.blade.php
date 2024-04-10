<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración de nomina') }}
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
                                        Configuración de nomina
                                    </h1>
                                </div>

                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Tipo empleado --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo empleado</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tipo empleado') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Beneficio --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Beneficio</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tipo empleado') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Cargo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Cargo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar cargo') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Departamento --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Departamento</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
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
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar estado compra') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Contrato --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Contrato</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar estado compra') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Tipo deducción --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo deducción</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar deducción') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Tipo ingreso --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo ingreso</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar ingreso') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Tipo nomina --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo nomina</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tipo nomina') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Nomina --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Nomina</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                       
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
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
                                                class="block text-sm font-medium text-gray-700">Tipo de nomina</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un tipo de nomina</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                class="rounded">
                                            <label for="Estado-compra"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar nomina') }}
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
