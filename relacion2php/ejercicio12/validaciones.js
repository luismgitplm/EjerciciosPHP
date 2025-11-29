/**************************************************
 * 
 * Validaciones para el formulario del ejercicio 12
 * 
 */
document.getElementById('form1').addEventListener("submit",function(event){
    // Prevención del flujo por defecto del evento
    event.preventDefault();

        // Recepción de datos mediante acceso al DOM
        var nota1 = parseFloat(document.getElementById("nota1").value);
        var nota2 = parseFloat(document.getElementById("nota2").value);
        var faltas = parseFloat(document.getElementById("faltas").value);
        var nombre = document.getElementById("nombre").value;           
        var email = document.getElementById("email").value;

        // Variable flag 
        var correcto = true;

        // Condiciones de validación para cada dato recibido
        if((!Number.isInteger(nota1) || nota1 < 1 || nota1 > 10)){
            document.getElementById('nota1Help').style.visibility = "visible";
            document.getElementById('nota1').style.borderColor="red";

            correcto = false;
        }

        if((!Number.isInteger(nota2) || nota2 < 1 || nota2 > 10)){
            document.getElementById('nota2Help').style.visibility = "visible";
            document.getElementById('nota2').style.borderColor="red";
            
            correcto = false;
        }

        if((!Number.isInteger(faltas) || faltas < 0)){
            document.getElementById('faltasHelp').style.visibility = "visible";
            document.getElementById('faltas').style.borderColor="red";

            correcto = false;
        }

        if(nombre.trim()==""){
            document.getElementById('nombreHelp').style.visibility = "visible";
            document.getElementById('nombre').style.borderColor="red";

            correcto = false;
        }

        // Si la variable flag no ha pasado a false se envía el formulario
        if (correcto) document.getElementById('form1').submit();
    
});

// Funciones que activan limpiarError cuando se produce un cambio tras el error
document.getElementById('nota1').addEventListener("change",function(){
    limpiarError('nota1');
});

document.getElementById('nota2').addEventListener("change",function(){
    limpiarError('nota2');
});

document.getElementById('faltas').addEventListener("change",function(){
    limpiarError('faltas');
});

document.getElementById('nombre').addEventListener("change",function(){
    limpiarError('nombre');
});

// Función que devuelve el estilo del form-text de ayuda a su estado previo al error
 function limpiarError(identificador){
        document.getElementById(identificador + 'Help').style.visibility = "hidden";
        document.getElementById(identificador).style.borderColor= "#dee2e6";
}