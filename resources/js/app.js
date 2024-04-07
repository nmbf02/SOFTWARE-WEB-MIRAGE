import './bootstrap';
import Swal from 'sweetalert2'

document.addEventListener('DOMContentLoaded', function () {
    const closeButton = document.querySelector('.end-2.5'); // Cambia esto si agregas un id único al botón.
    closeButton.addEventListener('click', function (e) {
      e.preventDefault(); // Evita que el botón envíe un formulario si es parte de uno.
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Tu trabajo ha sido salvado.',
        showConfirmButton: false,
        timer: 1500
      });
    });
  });
  