<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contrato de Venta de Vehículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .container {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        h1 {
            text-align: center;
        }

        .section {
            margin-top: 20px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contrato de Venta de Vehículo</h1>
        <div class="section">
            <h2>Información de las Partes</h2>
            <p><strong>Vendedor:</strong> MIRAGE</p>
            <p><strong>Dirección del Vendedor:</strong> Santiago de los caballeros, RD.</p>
            <p><strong>Comprador:</strong> {{ $cliente->persona->Nombre }}</p>
            <p><strong>Dirección del Comprador:</strong> {{ $cliente->persona->sector->Descripcion }}</p>
        </div>
        <div class="section">
            <h2>Descripción del Vehículo</h2>
            {{-- <p><strong>Marca:</strong> {{ $vehiculo->modelovehiculos->marcavehiculos->Descripcion  }}</p> --}}
            {{-- <p><strong>Modelo:</strong> {{ $vehiculo->modelovehiculos->Descripcion }}</p> --}}
            <p><strong>VIN (Número de Identificación del Vehículo):</strong> {{ $vehiculo->VIN }}</p>
            <p><strong>Año:</strong> {{ $vehiculo->AnoVehiculo }}</p>
            <p><strong>Placa:</strong> {{ $vehiculo->Placa }}</p>
            <p><strong>Chasis:</strong> {{ $vehiculo->Chasis }}</p>
            <p><strong>Matricula:</strong> {{ $vehiculo->Matricula }}</p>
            <p><strong>Marbete:</strong> {{ $vehiculo->Marbete }}</p>
            <p><strong>CapacidadPasajeros:</strong> {{ $vehiculo->CapacidadPasajeros }}</p>
            {{-- <p><strong>Color:</strong> {{ $vehiculo->color->Descripcion }}</p> --}}
        </div>
        <div class="section">
            <h2>Precio de Venta</h2>
            <p>El precio acordado para la venta del vehículo es <strong>${{ $vehiculo->Precio }}</strong></p>
        </div>
        <div class="section">
            <h2>Declaraciones y Garantías</h2>
            <p><strong>Garantia de venta:</strong> {{ $vehiculo->garantia->Nombre }}</p>
            <p>El Vendedor declara que el vehículo está libre de gravámenes y cargas, y que posee el derecho legal
                completo para vender el vehículo.</p>
            <p>El Comprador ha inspeccionado el vehículo y acepta su compra en el estado "tal cual".</p>
        </div>
        <div class="section">
            <h2>Responsabilidades del Comprador</h2>
            <p>El Comprador se compromete a registrar el vehículo a su nombre dentro de los 30 días siguientes a la
                fecha de compra y a asumir todas las responsabilidades legales asociadas con la propiedad y uso del
                vehículo.</p>
        </div>
        <div class="section">
            <h2>Transferencia de Propiedad</h2>
            <p>La propiedad del vehículo será transferida del Vendedor al Comprador una vez que se haya recibido el pago
                total y se hayan completado todos los documentos necesarios de transferencia y registro.</p>
        </div>
        <div class="section">
            <h2>Responsabilidades Adicionales del Vendedor</h2>
            <p>El Vendedor se compromete a proporcionar todos los documentos necesarios para la transferencia de
                propiedad del vehículo, incluyendo pero no limitado a certificado de título, revisión técnica y
                certificados de emisiones al día.</p>
        </div>
        <div class="section">
            <h2>Disposiciones Generales</h2>
            <p>Este contrato se rige bajo las leyes del estado o país correspondiente. Cualquier disputa legal
                relacionada con este contrato será resuelta en los tribunales del mismo.</p>
            <p>Este contrato representa el acuerdo completo entre las partes y sustituye cualquier acuerdo previo, oral
                o escrito. Cualquier modificación a este contrato debe hacerse por escrito y ser firmada por ambas
                partes.</p>
        </div>

        <div class="section">
            <h2>Firma del Vendedor</h2>
            <p>_________________________</p>
        </div>
        <div class="section">
            <h2>Firma del Comprador</h2>
            <p>_________________________</p>
        </div>
        <div class="section">
            <p><h3>Fecha de acta: </h3>{{ $venta->Fecha }}</p>
        </div>
        <div class="section">
            <h2>Testigos (Opcional)</h2>
            <p><strong>Testigo 1:</strong> _________________________</p>
            <p><strong>Testigo 2:</strong> _________________________</p>
        </div>
    </div>
</body>

</html>
