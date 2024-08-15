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
                            <form method="POST" action="{{ route('Tipovehiculoconcesionario.store') }}" class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                @csrf
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
                                            {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código</label>
                                                <input type="text" placeholder="Código"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Finalidad del
                                                    vehiculo</label>
                                                <input name="descripcion" type="text"
                                                    placeholder="Renta, venta o subasta..."
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <input type="checkbox" name="status" class="rounded">
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
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Modelo --}}
                                <form method="POST" action="{{ route('Modelovehiculo.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    del modelo</label>
                                                <input type="text" placeholder="Código del modelo"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text" placeholder="Descripción"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="marcaVehiculo"
                                                        class="block text-sm font-medium text-gray-700">Marca del
                                                        vehículo</label>
                                                    <select name="marcaVehiculo" id="marcaVehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una marca">
                                                        @foreach ($marcaVehiculo as $marca)
                                                            <option value="{{ $marca->IdMarcaVehiculo }}">
                                                                {{ $marca->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="Estado_modelo" name="status"
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
                                </form>
                                {{-- Marca --}}
                                <form method="POST" action="{{ route('Marcavehiculo.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Marca</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent3">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono para mostrar -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden')
                                                    <!-- Icono para ocultar, inicialmente no visible -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent3" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                <div>
                                                    <label for="descripcion"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text" placeholder="Descripción"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="grupoVehiculo"
                                                        class="block text-sm font-medium text-gray-700">Grupo del
                                                        vehículo</label>
                                                    <select name="grupoVehiculo" id="grupoVehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un grupo">
                                                        @foreach ($gruposVehiculo as $grupo)
                                                            <option value="{{ $grupo->IdGrupoVehiculo }}">
                                                                {{ $grupo->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="flex items-center">
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="ml-2 text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar marca') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Grupo --}}
                                <form method="POST" action="{{ route('Grupovehiculo.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        del grupo</label>
                                                    <input type="text" placeholder="Código del grupo"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="Estado_modelo" name="status"
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
                                </form>
                                {{-- Color exterior --}}
                                <form method="POST" action="{{ route('Colorexteriorvehiculo.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        del color</label>
                                                    <input type="text" placeholder="Código del color"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="acabadoVehiculo"
                                                        class="block text-sm font-medium text-gray-700">Acabado del
                                                        vehículo</label>
                                                    <select name="acabadoVehiculo" id="acabadoVehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un acabado">
                                                        @foreach ($acabadoVehiculo as $acabado)
                                                            <option value="{{ $acabado->IdAcabadoColorVehiculo }}">
                                                                {{ $acabado->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="Estado_modelo" name="status"
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
                                </form>
                                {{-- Acabado del vehiculo --}}
                                <form method="POST" action="{{ route('Acabadocolorvehiculo.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código del
                                                        acabado</label>
                                                    <input type="text" placeholder="Código del acabado"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="status"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar color acabado') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Estado del vehiculo --}}
                                <form method="POST" action="{{ route('Estadovehiculo.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Estado del
                                                        vehículo</label>
                                                    <input type="text" placeholder="Estado del vehículo"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar estado') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Ubicacion --}}
                                <form method="POST" action="{{ route('Ubicacion.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Ubicación</label>
                                                    <input type="text" placeholder="Código del color"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text" placeholder="Descripción"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="Almacenvehiculo"
                                                        class="block text-sm font-medium text-gray-700">Almacén</label>
                                                    <select name="Almacenvehiculo" id="Almacenvehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un almacen">
                                                        @foreach ($Almacenvehiculo as $Almacen)
                                                            <option value="{{ $Almacen->IdAlmacen }}">
                                                                {{ $Almacen->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar ubicación') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Almacen --}}
                                <form method="POST" action="{{ route('Almacen.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Almacén</label>
                                                    <input type="text" placeholder="Código del color"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text" placeholder="Descripción"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="SucursalVehiculo"
                                                        class="block text-sm font-medium text-gray-700">Sucursal</label>
                                                    <select name="SucursalVehiculo" id="SucursalVehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una sucursal">
                                                        @foreach ($SucursalVehiculo as $Sucursal)
                                                            <option value="{{ $Sucursal->IdSucursal }}">
                                                                {{ $Sucursal->Nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button type="submit" class="px-4 py-2">
                                                    {{ __('Salvar almacén') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Seguro del vehiculo --}}
                                <form method="POST" action="{{ route('aseguradoravehiculo.store') }}">
                                    @csrf
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
                                                        class="block text-sm font-medium text-gray-700">Número de
                                                        seguro</label>
                                                    <input name="numeroseguro" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="aseguradoravehiculo"
                                                        class="block text-sm font-medium text-gray-700">Aseguradora</label>
                                                    <select name="aseguradoravehiculo" id="aseguradoravehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una aseguradora">
                                                        @foreach ($aseguradoravehiculo as $aseguradora)
                                                            <option value="{{ $aseguradora->IdAseguradoraVehiculo }}">
                                                                {{ $aseguradora->Nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            contrato</label>
                                                        <input name="fechacontrato" type="date"
                                                            placeholder="Fecha del contrato"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            vencimiento</label>
                                                        <input name="fechavencimiento" type="date"
                                                            placeholder="Fecha vencimiento"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Fecha límite de
                                                        renovación</label>
                                                    <input name="limiterenovacion" type="date"
                                                        placeholder="Fecha límite de renovación"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Monto del
                                                            seguro</label>
                                                        <input name="montoseguro" type="number"
                                                            placeholder="Monto del seguro"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="Monedaseguro"
                                                            class="block text-sm font-medium text-gray-700">Moneda</label>
                                                        <select name="Monedaseguro" id="Monedaseguro"
                                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Seleccione una aseguradora">
                                                            @foreach ($Monedaseguro as $moneda)
                                                                <option value="{{ $moneda->IdMoneda }}">
                                                                    {{ $moneda->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
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
                                </form>
                                {{-- Transmision del vehiculo --}}
                                <form method="POST" action="{{ route('Transmisionvehiculo.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Transmisión del vehículo
                                            </h6>
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código de
                                                        transmisión</label>
                                                    <input type="text" placeholder="Código de transmisión"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar transmisión') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Traccion del vehiculo --}}
                                <form method="POST" action="{{ route('Traccionvehiculo.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tracción del vehículo
                                            </h6>
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
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar tracción') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Tipo de vehiculo --}}
                                <form method="POST" action="{{ route('Tipovehiculo.store') }}">
                                    @csrf
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código del
                                                        tipo</label>
                                                    <input type="text" placeholder="Código de tracción"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar tipo') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Segmento de vehiculo --}}
                                <form method="POST" action="{{ route('Segmentomercado.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Segmento de vehículo</h6>
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código del
                                                        segmento</label>
                                                    <input type="text" placeholder="Código de tracción"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar segmento') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Clasificacion del vehiculo --}}
                                <form method="POST" action="{{ route('Clasificacionvehiculo.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Clasificación del
                                                vehículo
                                            </h6>
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
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código del
                                                        segmento</label>
                                                    <input name="" type="text" placeholder="Código de tracción"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="Estado_modelo"
                                                           name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar clasificación') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Tipo Itbis --}}
                                <form method="POST" action="{{ route('Tipoitbis.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipo Itbis</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent16">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent16" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    {{-- <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Codigo del
                                                            ITBIS</label>
                                                        <input type="text" placeholder="Código del ITBIS"
                                                            class="border p-2 rounded w-full">
                                                    </div> --}}
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Porcentaje</label>
                                                        <input name="porcentajeitibis" type="number"
                                                            placeholder="% ITBIS" class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombreitbis" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcionitbis" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="Estado_modelo"
                                                        name="Estado_itbis" class="rounded">
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
{{--                                --}}{{--Mantenimiento de aceite--}}
{{--                                <form method="POST" action="{{ route('Tipoaceite.store') }}">--}}
{{--                                    @csrf--}}
{{--                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">--}}
{{--                                        <div class="inline-flex justify-between items-center w-full">--}}
{{--                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Aceite</h6>--}}
{{--                                            <button type="button"--}}
{{--                                                    class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"--}}
{{--                                                    data-target="toggleContent18">--}}
{{--                                                <div class="icon">--}}
{{--                                                    @include('icons/show') <!-- Icono visible por defecto -->--}}
{{--                                                </div>--}}
{{--                                                <div class="icon hidden">--}}
{{--                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->--}}
{{--                                                </div>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <!-- Sección a mostrar/ocultar -->--}}
{{--                                        <div id="toggleContent18" class="hidden">--}}
{{--                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">--}}
{{--                                                <div>--}}
{{--                                                    <label for="descripcion"--}}
{{--                                                           class="block text-sm font-medium text-gray-700">Tipo de aceite</label>--}}
{{--                                                    <input name="descripcion" type="text"--}}
{{--                                                           placeholder="Tipo de aceite" class="border p-2 rounded w-full">--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <input type="checkbox" id="status"--}}
{{--                                                           name="status" class="rounded">--}}
{{--                                                    <label for="status"--}}
{{--                                                           class="text-sm font-medium text-gray-700">Estado</label>--}}
{{--                                                </div>--}}
{{--                                                <x-button class="px-4 py-2">--}}
{{--                                                    {{ __('Salvar tipo de aceite') }}--}}
{{--                                                </x-button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                --}}{{--Mantenimiento de motor--}}
{{--                                <form method="POST" action="{{ route('Tipomotor.store') }}">--}}
{{--                                    @csrf--}}
{{--                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">--}}
{{--                                        <div class="inline-flex justify-between items-center w-full">--}}
{{--                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Motor</h6>--}}
{{--                                            <button type="button"--}}
{{--                                                    class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"--}}
{{--                                                    data-target="toggleContent19">--}}
{{--                                                <div class="icon">--}}
{{--                                                    @include('icons/show') <!-- Icono visible por defecto -->--}}
{{--                                                </div>--}}
{{--                                                <div class="icon hidden">--}}
{{--                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->--}}
{{--                                                </div>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <!-- Sección a mostrar/ocultar -->--}}
{{--                                        <div id="toggleContent19" class="hidden">--}}
{{--                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">--}}
{{--                                                <div>--}}
{{--                                                    <label for="color"--}}
{{--                                                           class="block text-sm font-medium text-gray-700">Tipo de motor</label>--}}
{{--                                                    <input name="descripcion" type="text"--}}
{{--                                                           placeholder="Gasolina, eléctrico..." class="border p-2 rounded w-full">--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <input type="checkbox" id="status"--}}
{{--                                                           name="status" class="rounded">--}}
{{--                                                    <label for="status"--}}
{{--                                                           class="text-sm font-medium text-gray-700">Estado</label>--}}
{{--                                                </div>--}}
{{--                                                <x-button class="px-4 py-2">--}}
{{--                                                    {{ __('Salvar tipo de motor') }}--}}
{{--                                                </x-button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
                                {{-- TODO: Colocar un modal donde se puedan editar los periodos de tiempo--}}
                                {{--Edad del vehiculo--}}
                                <form method="POST" action="{{ route('Edadvehiculo.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Edad del vehículo</h6>
                                            <button type="button"
                                                    class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                    data-target="toggleContent20">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent20" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                <div>
                                                    <label for="descripcion"
                                                           class="block text-sm font-medium text-gray-700">Descripcion</label>
                                                    <input name="descripcion" type="text"
                                                           placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="periodoUno" class="block text-sm font-medium text-gray-700">Primer periodo</label>
                                                        <input id="periodoUno" name="periodoUno" type="text" placeholder="Periodo 1" min=0 class="border p-2 rounded w-full" oninput="validateNumberInput(this)">
                                                    </div>
                                                    <div>
                                                        <label for="periodoDos" class="block text-sm font-medium text-gray-700">Segundo periodo</label>
                                                        <input id="periodoDos" name="periodoDos" type="text" placeholder="Periodo 2" class="border p-2 rounded w-full" oninput="validateNumberInput(this)">
                                                    </div>
                                                    {{--Que solo se permita numeros--}}
                                                    <script>
                                                        function validateNumberInput(input) {
                                                            input.value = input.value.replace(/[^0-9]/g, '');
                                                        }
                                                    </script>
                                                </div>
                                                {{--Modal para editar la edad vehicular--}}
                                                <hr style="border-color: #FF914D" class="p-1">
                                                <div>
                                                    <label for="Editar"
                                                           class="text-sm font-medium text-gray-700">EDITAR</label>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="status"
                                                           class="rounded">
                                                    <label for="status"
                                                           class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar edad vehicular') }}
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
    </div>

    @include ('footer')
    <script src="{{ asset('js/show-hidden.js') }}"></script>
</x-app-layout>
