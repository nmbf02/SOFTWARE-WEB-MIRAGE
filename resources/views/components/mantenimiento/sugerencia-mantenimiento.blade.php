<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sugerencia de mantenimiento de vehículo') }}
        </h2>
    </x-slot>
    @include ('aside')

    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">
    @endsection
    
    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="container h-full w-full bg-white relative overflow-y-auto lg:ml">
                        <div class="bg-white dark:bg-gray-700 p-6">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Sugerencia de mantenimiento
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">

                            <form method="GET" action="{{ route('suggestion') }}">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                    <div>
                                        <label for="kilometraje" class="block text-sm font-medium text-gray-700">Kilometraje</label>
                                        <input type="number" name="kilometraje" id="kilometraje" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ $kilometraje ?? '' }}">
                                    </div>
                                    <div>
                                        <label for="tipoMotor" class="block text-sm font-medium text-gray-700">Motor</label>
                                        <select name="tipoMotor" id="tipoMotor" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" onchange="this.form.submit()">
                                            <option value="0" selected>Seleccione un tipo de Motor</option>
                                            @foreach ($tipoMotor as $Motor)
                                                <option value="{{ $Motor->IdMotor }}" {{ $requestTipoMotor == $Motor->IdMotor ? 'selected' : '' }}>
                                                    {{ $Motor->Descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for="aceite" class="block text-sm font-medium text-gray-700">Aceite</label>
                                        <select name="aceite_display" id="aceite" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duración-150" disabled>
                                            @foreach ($aceites as $aceite)
                                                <option value="{{ $aceite->IdAceite }}" {{ $selectedAceite == $aceite->IdAceite ? 'selected' : '' }}>
                                                    {{ $aceite->Descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!-- Campo oculto para enviar el valor seleccionado -->
                                        <input type="hidden" name="aceite" value="{{ $selectedAceite }}">
                                    </div>
                                </div>
                            </form>                             
                                
                            {{-- Asignacion de mantenimientos --}}
                            <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tareas de Mantenimiento</h6>
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                    <form>
                                        <table class="mantenimiento-table" style="width: 100%; border: 2px solid #FF914D; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Nombre</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Desde</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Hasta</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Tiempo Recomendado</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Precio</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Seleccionar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($mantenimientos->isEmpty())
                                                    <tr>
                                                        <td colspan="6" style="text-align: center;">No se encontraron mantenimientos para el kilometraje y motor seleccionados.</td>
                                                    </tr>
                                                @else
                                                    @foreach($mantenimientos as $mantenimiento)
                                                        <tr>
                                                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $mantenimiento->Descripcion }}</td>
                                                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $mantenimiento->KilometrajeRecomendado }} km</td>
                                                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $mantenimiento->KilometrajeRecomendado + 5000 }} km</td>
                                                            <td style="border: 1px solid #ddd; padding: 8px;">{{ $mantenimiento->tiempo_recomendado }} meses</td>
                                                            <td style="border: 1px solid #ddd; padding: 8px;">${{ number_format($mantenimiento->precio, 2) }}</td>
                                                            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                                <input type="checkbox" name="mantenimiento_id[]" value="{{ $mantenimiento->IdMantenimiento }}" style="display: block; margin: 0 auto;" onchange="calculateTotal(this)" data-precio="{{ $mantenimiento->precio }}">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>                                        
                                    </form>
                                    <div class="p-2 font-bold text-right px-32">
                                        <h1 class="text-xl mb-4 text-gray-900 dark:text-gray-100">TOTAL: $<span id="total">0.00</span></h1>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="p-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('footer')

    {{-- Script para calcular el total --}}
    <script>
        function calculateTotal(checkbox) {
            var total = parseFloat(document.getElementById('total').innerText);
            var precio = parseFloat(checkbox.getAttribute('data-precio'));
            
            if (checkbox.checked) {
                total += precio;
            } else {
                total -= precio;
            }

            document.getElementById('total').innerText = total.toFixed(2);
        }
    </script>
</x-app-layout>
