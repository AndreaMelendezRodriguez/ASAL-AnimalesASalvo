let formularios = document.forms;

let formulario = formularios[0];

function validarCorreo(){
    let valor = formulario['elements'][0]['value'];
    let error =  document.getElementById('email-error');
    let expresion = /^\w+@[a-zA-z]+[.][a-zA-z]+$/;

    if(expresion.test(valor)){
        error.textContent = 'Correcto';
        error.classList.remove('invalid');
        error.classList.add('valid');
    }else{
        error.textContent = 'Incorrecto';
        error.classList.remove('valid');
        error.classList.add('invalid');
    }
}

function validarTelefono(){
    let valor = formulario['elements'][0]['value'];
    let error =  document.getElementById('telefono-error');
    let expresion = /^\d{9}$/;

    if(expresion.test(valor)){
        error.textContent = 'Correcto';
        error.classList.remove('invalid');
        error.classList.add('valid');
    }else{
        error.textContent = 'Incorrecto';
        error.classList.remove('valid');
        error.classList.add('invalid');
    }
}


function validarContra() {
    let valor = formulario['contrasenia'].value;
    let error = document.getElementById('password-error');

    if (valor.length >= 8) {
      error.textContent = 'Correcta';
      error.classList.remove('invalid');
      error.classList.add('valid');
    } else {
      error.textContent = 'Por favor, ingresa una contraseña de al menos 8 caracteres';
      error.classList.remove('valid');
      error.classList.add('invalid');
    }
  }

function validarFecha(){
    let valor = formulario['elements'][1]['value'];
    let error =  document.getElementById('fecha-error');
    let expresion = /^\d{1,2}-\d{1,2}-\d{4}$/;

    if(expresion.test(valor)){
        error.textContent = 'Correcta';
        error.classList.remove('invalid');
        error.classList.add('valid');
    }else{
        error.textContent = 'Incorrecta';
        error.classList.remove('valid');
        error.classList.add('invalid');
        
    }
}


function validarFormulario() {
    let nombre = document.getElementsByName('nombre')[0].value;
    let apellidos = document.getElementsByName('apellidos')[0].value;
    let telefono = document.getElementsByName('telefono')[0].value;
    let email = document.getElementsByName('email')[0].value;
    let contrasenia = document.getElementsByName('contrasenia')[0].value;
    let fecha = document.getElementsByName('fecha')[0].value;
    let dni = document.getElementsByName('dni')[0].value;
    
    if (nombre === '' || apellidos === '' || telefono === '' || email === '' || contrasenia === '' || fecha === '' || dni === '') {
        let mensajeError = document.getElementById('mensaje-error');
        mensajeError.textContent = 'Por favor, completa todos los campos del formulario.';
        return false;
    }
}