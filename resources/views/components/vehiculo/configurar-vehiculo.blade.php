<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración de vehículo') }}
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
                            {{-- Titulo --}}
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Configuración de vehículo
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- Destino --}}
                            <form class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Destino</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent1">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent1" class="hidden">
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
                                            <div>
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Modelo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Modelo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent2">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent2" class="hidden">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
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
                                </div>
                                {{-- Marca --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Marca</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent3">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent3" class="hidden">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
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
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Grupo
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
                                </div>
                                {{-- Grupo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Grupo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent4">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent4" class="hidden">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
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
                                </div>
                                {{-- Color exterior --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Color exterior</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent5">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent5" class="hidden">
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
                                </div>
                                {{-- Acabado del vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Acabado del vehículo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent6">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent6" class="hidden">
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
                                </div>
                                {{-- Estado del vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Estado del vehículo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent7">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent7" class="hidden">
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
                                </div>
                                {{-- Ubicacion --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Ubicación</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent8">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent8" class="hidden">

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
                                </div>
                                {{-- Almacen --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Almacén</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent9">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent9" class="hidden">
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
                                </div>
                                {{-- Seguro del vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Seguro del vehiculo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent10">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent10" class="hidden">
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
                                </div>
                                {{-- Transmision del vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Transmisión del vehículo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent11">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent11" class="hidden">
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
                                </div>
                                {{-- Traccion del vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tracción del vehículo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent12">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent12" class="hidden">
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
                                </div>
                                {{-- Tipo de vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo de vehículo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent13">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent13" class="hidden">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código del
                                                    tipo</label>
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
                                </div>
                                {{-- Segmento de vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Segmento de vehículo</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent13">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent13" class="hidden">
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
                                </div>
                                {{-- Clasificacion del vehiculo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Clasificación del vehículo
                                        </h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent14">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent14" class="hidden">
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
                                </div>
                                {{-- Tipo Itbis --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo Itbis</h6>
                                        <button type="button"
                                            class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                            data-target="toggleContent15">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent15" class="hidden">
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
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include ('footer')
    <script src="{{ asset('js/show-hidden.js') }}"></script>
</x-app-layout>
