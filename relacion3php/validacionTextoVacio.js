 // Validación que comprueba si el texto recibido mediante DOM es una cadena vacía
 let formulario = document.querySelector("#form");
        formulario.addEventListener("submit", (e) => {
            e.preventDefault();
            
            // Elemento DOM que mostrará el mensaje de error
            let alerta = document.querySelector("#alerta");
            // Valor recibido mediante el formulario
            let texto = document.querySelector("#texto").value;
            // Variable flag
            let error = false;

            if (texto.trim() === ""){
                error = true;
                alerta.innerHTML = 
                    "<div class='alert alert-danger'>Tiene que indicar un texto para continuar</div>";
            }

            if (!error) formulario.submit();
        })