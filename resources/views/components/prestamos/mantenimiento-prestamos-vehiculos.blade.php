<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mantenimiento de préstamos') }}
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
                                        Mantenimiento de préstamos
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Tipo porcentaje mora --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo porcentaje mora</h6>
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
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código</label>
                                                    <input type="text" placeholder="Código"
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
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Rango</label>
                                                    <input type="int" placeholder="Rango de dias"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Porcentaje</label>
                                                    <input type="number" placeholder="%"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Incremento
                                                        anual</label>
                                                    <input type="number" placeholder="Incremento anual"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar tipo porcentaje mora') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Porcentaje mora --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Porcentaje mora</h6>
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
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código</label>
                                                    <input type="text" placeholder="Código"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Descripción</label>
                                                <input type="text" placeholder="Descripción"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Porcentaje</label>
                                                    <input type="int" placeholder="%"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <h6 class="block text-sm font-medium text-gray-700">Dias de retraso</h6>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Desde</label>
                                                        <input type="date" placeholder="Desde"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Hasta</label>
                                                        <input type="date" placeholder="Hasta"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Aplicable sobre
                                                    cuotas</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Aplicable sobre total
                                                    adeudado</label>
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tipo
                                                    porcentaje</label>
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccione un tipo</option>
                                                </select>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar porcentaje mora') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tipo prestamo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo préstamo</h6>
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
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                    </label>
                                                    <input type="text" placeholder="Código"
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
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Tasa
                                                    de interés</label>
                                                <input type="number" placeholder="%"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <h6 class="text-sm font-medium text-gray-700">Plazos en días</h6>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Plazo
                                                        mínimo</label>
                                                    <input type="number" placeholder="mínimo"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Plazo
                                                        máximo</label>
                                                    <input type="number" placeholder="máximo"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar tipo préstamo') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tipo abono prestamo --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo abono préstamo</h6>
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
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                    </label>
                                                    <input type="text" placeholder="Código"
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
                                                <input type="checkbox" id="Estado_modelo" name="Estado_modelo"
                                                    class="rounded">
                                                <label for="Estado_modelo"
                                                    class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar tipo abono préstamo') }}
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
