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

function validarContra(){
    let valor = formulario['elements'][1]['value'];
    let error =  document.getElementById('password-error');
    let expresion = /(?=.*\d{2}).{7,}/;

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

document.addEventListener('DOMContentLoaded', function() {
    var usernameInput = document.getElementById('username');
    var passwordInput = document.getElementById('password');
    var loginButton = document.getElementById('login-button');
  
    function validateForm() {
      if (usernameInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
        loginButton.disabled = false;
      } else {
        loginButton.disabled = true;
      }
    }
  
    usernameInput.addEventListener('blur', validateForm);
    passwordInput.addEventListener('blur', validateForm);
  });