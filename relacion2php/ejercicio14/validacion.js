let formulario = document.querySelector("#form");

formulario.addEventListener("submit", (e) => {
    e.preventDefault();

    let nota = Number(document.querySelector("#nota").value);
    let correcto = true;

    if (!Number.isInteger(nota) || nota < 0 || nota > 10){
        correcto = false;
        document.getElementById("notaHelp").style.visibility = "visible";
        document.getElementById("nota").style.borderColor = "red";
    }

    if (correcto) formulario.submit();
})

document.querySelector("#nota").addEventListener("change", () =>{
    if (document.getElementById("nota").value.trim() == ""){
        document.getElementById("notaHelp").style.visibility = "hidden";
        document.getElementById("nota").style.borderColor = "white";
    }
    
})
