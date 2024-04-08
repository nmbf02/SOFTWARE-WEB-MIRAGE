<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuraciones generales') }}
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
                                        Configuraciones generales
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Sucursal --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Sucursal</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la sucursal</label>
                                                <input type="text" placeholder="Código de la sucursal"
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
                                                class="block text-sm font-medium text-gray-700">Empresa</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una empresa</option>
                                            </select>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Calle</label>
                                                <input type="text" placeholder="Calle"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Edificio</label>
                                                <input type="text" placeholder="Edificio"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sector</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un sector</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="Telefono"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="mail" placeholder="Correo electrónico"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar sucursal') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Empresa --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Empresa</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la empresa</label>
                                                <input type="text" placeholder="Código de la empresa"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">RUC</label>
                                                <input type="text" placeholder="Registro Único de Contribuyente"
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
                                                class="block text-sm font-medium text-gray-700">Abreviatura del
                                                nombre</label>
                                            <input type="text" placeholder="Abreviatura"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Calle</label>
                                                <input type="text" placeholder="Calle"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Edificio</label>
                                                <input type="text" placeholder="Edificio"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sector</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un sector</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="Telefono"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="mail" placeholder="Correo electrónico"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar empresa') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Aseguradora --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Aseguradora de vehículos</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la aseguradora</label>
                                                <input type="text" placeholder="Código de la aseguradora"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Calle</label>
                                                <input type="text" placeholder="Calle"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Edificio</label>
                                                <input type="text" placeholder="Edificio"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sector</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un sector</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="Telefono"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="mail" placeholder="Correo electrónico"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar aseguradora') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Seguro --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Seguro</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la aseguradora</label>
                                                <input type="text" placeholder="Código de la aseguradora"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Tipo
                                                seguro</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un seguro</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Compañía del
                                                seguroo</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una compañía</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Número de
                                                poliza</label>
                                            <input type="text" placeholder="Número de poliza"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Estado poliza</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un estado</option>
                                            </select>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha inicio</label>
                                                <input type="date" placeholder="Fecha inicio"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha
                                                    vencimiento</label>
                                                <input type="date" placeholder="Fecha vencimiento"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Cobertura</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una cobertura</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Condición del
                                                seguro</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una condición</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="Telefono"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="mail" placeholder="Correo electrónico"
                                                class="border p-2 rounded w-full">
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
                                {{-- Sector --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Sector</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                del sector</label>
                                            <input type="text" placeholder="Código del sector"
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
                                                class="block text-sm font-medium text-gray-700">Provincia</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una provincia</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar sector') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Ciudad --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Ciudad</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la ciudad</label>
                                            <input type="text" placeholder="Código de la provincia"
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
                                                class="block text-sm font-medium text-gray-700">Provincia</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione una provincia</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar ciudad') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Provincia --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Provincia</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la provincia</label>
                                            <input type="text" placeholder="Código de la provincia"
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
                                                class="block text-sm font-medium text-gray-700">País</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un país</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar provincia') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- pais --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">País</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                del país</label>
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
                                            {{ __('Salvar país') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Tipo de seguro --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipos de seguros</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                del seguro</label>
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
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tipo de seguro') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Compania de seguro --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Compañía del seguro</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la compañía</label>
                                            <input type="text" placeholder="Código de la compañía"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sector</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un sector</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Teléfono</label>
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
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar compañía') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Cobertura seguro --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Cobertura del seguro</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la cobertura</label>
                                            <input type="text" placeholder="Código de la compañía"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Límite</label>
                                                <input type="number" placeholder="Límite"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Deducible</label>
                                                <input type="number" placeholder="Deducible"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Premium</label>
                                                <input type="number" placeholder="Premium"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Tipo
                                                riesgo</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un riesgo</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar cobertura') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Tipo riesgo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipos de riesgo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                del riesgo</label>
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
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar tipo de riesgo') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Estado poliza --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Estado de la poliza</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la poliza</label>
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
                                {{-- Condicion del seguro --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Condición del seguro</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la condición</label>
                                            <input type="text" placeholder="Código de la condición"
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
                                                class="block text-sm font-medium text-gray-700">Fecha efectiva</label>
                                            <input type="date" placeholder="Fecha efectiva"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar condición') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Moneda --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Moneda</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la moneda</label>
                                            <input type="text" placeholder="Código de la condición"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="tasa"
                                                class="block text-sm font-medium text-gray-700">Tasa</label>
                                            <input type="number" id="tasa" name="tasa" step="0.01"
                                                placeholder="Tasa" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar moneda') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Canal de comunicacion --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Canal de comunicación</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la vía</label>
                                            <input type="text" placeholder="Código de la condición"
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
                                            {{ __('Salvar vía') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Condicion factura --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Condición de la factura</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                de la condición</label>
                                            <input type="text" placeholder="Código de la condición"
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
                                                class="block text-sm font-medium text-gray-700">Cantidad de días</label>
                                            <input type="number" placeholder="Días"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar condición') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Metodo de pago --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Método de pago</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código
                                                del método</label>
                                            <input type="text" placeholder="Código de la condición"
                                                class="border p-2 rounded w-full">
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
                                            {{ __('Salvar condición') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Garantia --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Garantía</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la garantía</label>
                                                <input type="text" placeholder="Código de la garantía"
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
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha inicio</label>
                                                <input type="date" placeholder="Fecha inicio"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Fecha
                                                    fin</label>
                                                <input type="date" placeholder="Fecha fin"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Cobertura</label>
                                                <input type="number" placeholder="Cobertura"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Deducible</label>
                                                <input type="number" placeholder="Deducible"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>   
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Prima base</label>
                                            <input type="number" placeholder="Prima base"
                                                class="border p-2 rounded w-full">
                                        </div>  
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Duración</label>
                                                <input type="number" placeholder="Duración"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">Lapso de tiempo</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccione un lapso</option>
                                                </select>
                                            </div>
                                        </div>     
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar garantía') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Cuenta de banco --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Cuenta bancaria</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código</label>
                                                <input type="text" placeholder="Código de la garantía"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Número de cuenta</label>
                                            <input type="text" placeholder="Número de cuenta"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Banco</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un banco</option>
                                            </select>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tipo</label>
                                                <input type="text" placeholder="Tipo"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color" class="block text-sm font-medium text-gray-700">Moneda</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccione una moneda</option>
                                                </select>
                                            </div>
                                        </div>  
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Fecha de apertura</label>
                                            <input type="date" placeholder="Fecha de apertura"
                                                class="border p-2 rounded w-full">
                                        </div>  
                                        <div>
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar cuenta') }}
                                        </x-button>
                                    </div>
                                </div>
                                {{-- Banco --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Compañía del seguro</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
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
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Sector</label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccione un sector</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Teléfono</label>
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
                                            <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                class="rounded">
                                            <label for="Estado_modelo"
                                                class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <x-button class="px-4 py-2">
                                            {{ __('Salvar compañía') }}
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
</x-app-layout>
