document.getElementById('helpButton').addEventListener('click', function(event) {
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Your manual is ready for download',
      showConfirmButton: false,
      timer: 1500
    }).then((result) => {
      if (result.dismiss === Swal.DismissReason.timer) {
        window.location.href = '/download-manual'; // Asegúrate de que esta URL sea la correcta
      }
    });
  });