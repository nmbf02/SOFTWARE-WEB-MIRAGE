// Esperar a que el DOM cargue
document.addEventListener("DOMContentLoaded", function () {
    // Buscar el botón por el atributo data-modal-hide
    var closeButton = document.querySelector('[data-modal-hide="authentication-modal"]');

    // Asegurarse de que el botón existe
    if (closeButton) {
        closeButton.addEventListener('click', function () {
            // Buscar el modal por el ID
            var modal = document.getElementById('authentication-modal');

            // Asegurarse de que el modal existe
            if (modal) {
                // Aquí puedes simplemente ocultar el modal añadiendo 'hidden' o ajustando su estilo
                modal.classList.add('hidden'); // Si estás usando Tailwind CSS
                // modal.style.display = 'none'; // Otra opción sin Tailwind CSS
            }
        });
    }
});
