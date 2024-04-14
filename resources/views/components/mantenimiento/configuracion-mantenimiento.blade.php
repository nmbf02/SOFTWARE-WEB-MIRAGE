<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración de mantenimiento') }}
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
                                        Configuración de mantenimiento
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Estado solicitud cita --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Estado solicitud cita</h6>
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
                                                {{ __('Salvar estado solicitud') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Estado orden reparación --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Estado orden reparación</h6>
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
                                                {{ __('Salvar estado ordeb') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Frecuencia --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Frecuencia</h6>
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
                                                {{ __('Salvar frecuencia') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tipo mantenimiento --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo mantenimiento</h6>
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
                                                    class="block text-sm font-medium text-gray-700">Frecuencia</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccionar</option>
                                                </select>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="Estado-compra" name="Estado-compra"
                                                    class="rounded">
                                                <label for="Estado-compra"
                                                    class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar mantenimiento') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tipo motivo orden reparacion --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Motivo orden reparación</h6>
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
                                                {{ __('Salvar motivo') }}
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
