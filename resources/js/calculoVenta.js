document.addEventListener('DOMContentLoaded', function() {
    const cantidadInput = document.querySelector('input[name="cantidadvehiculo"]');
    const descuentoInput = document.querySelector('input[name="descuentovehiculo"]');
    const precioInput = document.querySelector('input[name="preciovehiculo"]');
    const itbisInput = document.querySelector('input[name="itbisvehiculo"]');
    const subtotalInput = document.querySelector('input[name="subtotalvehiculo"]');
    const totalInput = document.querySelector('input[name="totalvehiculo"]');

    const descuentoFacturaInput = document.querySelector('input[name="descuentofactura"]');
    const subtotalFacturaInput = document.querySelector('input[name="subtotalfactura"]');
    const itbisFacturaInput = document.querySelector('input[name="itbisfactura"]');
    const montoAPagarInput = document.querySelector('input[name="montoapagar"]');

    function calcularValores() {
        const precio = parseFloat(precioInput.value) || 0;
        const cantidad = parseInt(cantidadInput.value) || 0;
        const descuentoPorcentaje = parseFloat(descuentoInput.value) || 0;

        const baseSubtotal = precio * cantidad;
        const descuento = baseSubtotal * (descuentoPorcentaje / 100);
        const subtotal = baseSubtotal - descuento;
        const itbis = subtotal * 0.18;
        const total = subtotal + itbis;

        // Actualizar los campos de vehículo
        itbisInput.value = itbis.toFixed(2);
        subtotalInput.value = subtotal.toFixed(2);
        totalInput.value = total.toFixed(2);

        // Actualizar los campos adicionales de la factura
        descuentoFacturaInput.value = descuento.toFixed(2);
        subtotalFacturaInput.value = subtotal.toFixed(2);
        itbisFacturaInput.value = itbis.toFixed(2);
        montoAPagarInput.value = total.toFixed(2);
    }

    cantidadInput.addEventListener('input', calcularValores);
    descuentoInput.addEventListener('input', calcularValores);
});
