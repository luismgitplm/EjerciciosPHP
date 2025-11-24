const formulario = document.querySelector("#form");

formulario.addEventListener("submit", (e) => {
    e.preventDefault();

    let seleccion = document.querySelector("#opciones").value;
    let texto = document.querySelector("#texto").value;
    let alerta = document.querySelector("#alerta");
    let error = false;

    if (!seleccion){
        error = true;
        alerta.innerHTML = 
            '<div class="alert alert-danger">Debe seleccionar una opción</div>';
    }

    if (texto.trim() === ""){
        error = true;
        alerta.innerHTML =
            '<div class="alert alert-danger">Debe escribir un texto para continuar</div>';
    }

    if (!error) formulario.submit();
})