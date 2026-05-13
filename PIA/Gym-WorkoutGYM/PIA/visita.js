function enviarFormulario(){
    var nombre = document.getElementById('InputNombre').value;
    var apellido = document.getElementById('InputApellido').value;
    var correo = document.getElementById('InputCorreo').value;
    var telefono = document.getElementById('InputTelefono').value;
    var fecha = document.getElementById('InputFecha').value;

    if(nombre !== '' && apellido !== '' && correo !== '' && telefono !== '' && fecha !== '')
    {
        alert("Tu visita fue registrada, " + nombre);
    }

               
    (function  () {
    
        var forms = document.querySelectorAll('.needs-validation')
        
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                
              }
              
              form.classList.add('was-validated')
            }, )
          })
      })()
        
}