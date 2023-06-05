function confirmarEnvio() {
    let confirmacion = confirm("¿Estás seguro de enviar el formulario?");
    return confirmacion;
}

let formulario = document.querySelector('form');

formulario.addEventListener('submit', function (event) {
    let enviar = confirmarEnvio();
    if (!enviar) {
        event.preventDefault();
    }
});