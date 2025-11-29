 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
 </head>
 <body>
    <!--18- Repetiremos el ejercicio 19 de la relación anterior, pero con formulario
    formateado en Bootstrap-->

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" id="form">
            <h2>Pasar a binario</h2>
            <label for="num" class="form-label">Indique un número</label>
            <input type="text" class="form-control" name="num" id="num">

            <input type="submit" value="Enviar">
             <div id="contenido"></div>
        </form>

       
    </div>

    <script>
        let formulario = document.querySelector("#form");

        formulario.addEventListener("submit", (e) => {
            e.preventDefault();
            let error = false;
            let input = document.querySelector("#num").value;
            let num = Number(input);
            let contenido = document.querySelector("#contenido");

            if (isNaN(num) || input.trim() === ""){
                contenido.innerHTML = `<div class="alert alert-danger"> Tiene que indicar un número</div>`;
                error = true;
            }

            if (!error) formulario.submit();
        })
    </script>
 </body>
 </html>
 
 <?php
    if (isset($_GET['num'])){
        $numero = $_GET['num'];
        $resultado = "";

       echo "el resultado es : ";
       while ($numero >= 2) {
          $resultado =  (string) $numero % 2 . $resultado; 
          $numero /= 2;
       }
    
       echo "1".$resultado;
    }
       
    ?>