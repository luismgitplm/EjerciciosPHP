 let formulario = document.querySelector("#form");
        formulario.addEventListener("submit", (e) => {
            e.preventDefault();

            let alerta = document.querySelector("#alerta");
            let texto = document.querySelector("#texto").value;
            let error = false;

            if (texto.trim() === ""){
                error = true;
                alerta.innerHTML = 
                    "<div class='alert alert-danger'>Tiene que indicar un texto para continuar</div>";
            }

            if (!error) formulario.submit();
        })