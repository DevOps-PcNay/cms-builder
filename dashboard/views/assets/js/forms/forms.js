/*=============================================
Validación de formularios desde bootstrap
=============================================*/

// Disable form submissions if there are invalid fields
// Se agrega una clase en el formulario llamado "needs-vslidation"

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    // En el "Array.prototype" accessara a cada uno de los input del form para validarlos 
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        // Valida cada campo en base a la directiva "Request" de la etiqueta
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();