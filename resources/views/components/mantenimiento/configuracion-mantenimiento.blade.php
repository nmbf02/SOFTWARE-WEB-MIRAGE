<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración de servicios de mantenimiento') }}
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
                            {{--Titulo--}}
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100 hover:text-blue-700">
                                        Configuración de servicios | (Mantenimiento)
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{--Formulario de registro de servicio--}}
                            <form method="POST" action="{{route('mantenimiento-mantenimiento.store')}}"
                                  class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                {{-- Estado solicitud cita --}}
                                @csrf
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipos de mantenimiento</h6>
                                        <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                            <div class="icon hidden">
                                                @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                            </div>
                                        </button>
                                    </div>
                                    <!-- Sección a mostrar/ocultar -->
                                    <div id="toggleContent" class="hidden">
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            {{--Nombre del servicio--}}
                                            {{--TODO: AGREGAR TIPO DE MANTENIMIENTO--}}
                                            <div>
                                                <label for="descripcion"
                                                       class="block text-sm font-medium text-gray-700">Descripción</label>
                                                <input type="text" placeholder="Descripción" id="descripcion"
                                                       name="descripcion"
                                                       class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <input type="checkbox" id="status" name="status"
                                                       class="rounded">
                                                <label for="status"
                                                       class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar tipo de mantenimiento') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- Formulario de regristo de aceite --}}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('footer')
    <script src="{{ asset('js/show-hidden.js') }}"></script>
</x-app-layout>
