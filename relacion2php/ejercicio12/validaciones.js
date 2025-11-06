/**************************************************
 * 
 * Validaciones para el formulario del ejercicio 12
 * 
 */
document.getElementById('form1').addEventListener("submit",function(event){
    event.preventDefault();

        var nota1 = parseFloat(document.getElementById("nota1").value);
        var nota2 = parseFloat(document.getElementById("nota2").value);
        var faltas = parseFloat(document.getElementById("faltas").value);
        var nombre = document.getElementById("nombre").value;           
        var email = document.getElementById("email").value;

        var correcto = true;

        if((!Number.isInteger(nota1) || nota1 < 1 || nota1 > 10)){
            document.getElementById('nota1Help').style.visibility = "visible";
            document.getElementById('nota1').style.borderColor="red";
            //marcarError('nota1')
        // alert("La nota 1 es errónea, debe ser un número entero de 1 a 10");
            correcto = false;
        }

        if((!Number.isInteger(nota2) || nota2 < 1 || nota2 > 10)){
            document.getElementById('nota2Help').style.visibility = "visible";
            document.getElementById('nota2').style.borderColor="red";
            //alert("La nota 2 es errónea, debe ser un número entero de 1 a 10");
            correcto = false;
        }

        if((!Number.isInteger(faltas) || faltas < 0)){
            alert("El número de faltas debe ser un número entero positivo o cero");
            correcto = false;
        }

        if(nombre.trim()==""){
            alert("El nombre es obligatorio");
            correcto = false;
        }

        if (correcto) document.getElementById('form1').submit();
    
});

document.getElementById('nota1').addEventListener("change",function(){
    limpiarError('nota1');
});

document.getElementById('nota2').addEventListener("change",function(){
    limpiarError('nota2');
});


 /*
    function marcarError(identificador){
        document.getElementById(identificador + 'Help').style.visibility = "visible";
        document.getElementById(identificador).style.borderColor="red";
    }*/

 function limpiarError(identificador){
        document.getElementById(identificador + 'Help').style.visibility = "hidden";
        document.getElementById(identificador).style.borderColor= "#dee2e6";
}