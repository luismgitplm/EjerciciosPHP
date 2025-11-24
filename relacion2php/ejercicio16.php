<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" id="form">
            <h2>Es primo o divisores</h2>
            <label for="num" class="form-label">Indique un número</label>
            <input type="text" class="form-control" name="num" id="num">

            <div class="mb-3">
                <label class="form-label">Selecciona el resultado que deseas:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="opcion" id="esPrimo" value="primo">
                    <label class="form-check-label" for="esPrimo">Si es primo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="opcion" id="mostrarDivisores" value="divisores">
                    <label class="form-check-label" for="mostrarDivisores">Mostrar divisores</label>
                </div>
            </div>

            <input type="submit" value="Enviar">

            <div id="alerta"></div>
        </form>
    </div>

    <script>
        const formulario = document.querySelector("#form");

        formulario.addEventListener("submit", (e) =>{
            e.preventDefault();

            let valor = document.querySelector("#num").value;
            let num = Number(valor);
            let error = false;

            if (valor.trim() === "" || !Number.isInteger(num) || num < 0){
                document.querySelector("#alerta").innerHTML = '<div class="alert alert-danger">Debe mostrar un número entero positivo</div>';
                error = true;
            }

            if (!error) formulario.submit();
        })
    </script>

    <?php
        if (isset($_GET['opcion']) && isset($_GET['num'])){
            $num = intval($_GET['num']);
            $opcion = $_GET['opcion'];
            
            if ($opcion == "primo"){
                $i = 2;
                $primo  = true;
                do {
                    if ($num % $i == 0){
                        $primo = false;
                    }
                    $i++;
                } while ($primo && $i < $num);

                if ($i >= $num){
                    echo "El número $num es primo";
                } else {
                    echo "El número $num no es primo";
                }

            } else {
                if($num < 1){
                echo "El número no puede tener divisores.";
                } else{
                    echo "Los divisores de $num:<br>";
                    for ($i=1; $i <= $num; $i++) { 
                        if($num % $i == 0){
                            echo "<strong>$i</strong> ";
                        } else{
                            echo "$i ";
                        }
                    }
                }
            }
            
        }
    ?>
</body>
</html>