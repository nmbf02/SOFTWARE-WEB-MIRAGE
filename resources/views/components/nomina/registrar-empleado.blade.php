<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar empleado') }}
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
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Registrar empleado
                            </h1>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form method="POST" action="{{ route('RegistrarEmpleado.store') }}">
                                @csrf
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Información del empleado
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                for="nombre">
                                                Nombre
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{@$empleado->Nombre}}" placeholder="Nombre" name="nombre">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                for="apellido">
                                                Apellido
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{@$empleado->Apellido}}" placeholder="Apellido" name="apellido">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Contacto
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                for="telefono">
                                                Teléfono
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Teléfono" value="{{@$empleado->Telefono}}" name="telefono">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                for="email">
                                                Email
                                            </label>
                                            <input type="email"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="{{@$empleado->Email}}" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Información Adicional
                                </h6>
                                <div class="flex flex-wrap">
                                    {{-- Tipo --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Tipo de empleado
                                            </label>
                                            <div class="flex gap-2 items-center">
                                                <select value="{{@$empleado->IdTipoEmpleado}}" id="tipoEmpleado" name="tipoEmpleado"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required placeholder="Seleccione un tipo de Empleado">
                                                    @foreach ($tipoEmpleado as $empleadotipo)
                                                        <option value="{{ $empleadotipo->IdTipoEmpleado }}">
                                                            {{ $empleadotipo->Descripcion }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input checked="{{@$empleado->Status}}" type="checkbox" id="Estado_empleado" name="Status" class="rounded" >
                                    <label for="Estado_empleado"
                                        class="text-sm font-medium text-gray-700">Estado</label>
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2 mb-3">
                                    {{ __('Registrar empleado') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    @include ('footer')
    <script src="/js/paginacion.js"></script>
</x-app-layout>
