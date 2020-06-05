eventListeners();

function eventListeners() {
    document.querySelector("#formulario").addEventListener('submit', validarRegistro);
}

function validarRegistro() {
    e.preventDefault();


    console.log("dale");
}