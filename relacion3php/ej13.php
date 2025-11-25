<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center" id="wrapper">
        <form method="get" id="form" class="mb-3">
            <h2>Procesamiento de cadenas de texto</h2>
            <label for="texto" class="form-label">Escriba un texto</label>
            <input type="text" class="form-control" name="texto" id="texto">

            <input type="submit" value="Enviar">
            <div id="alerta"></div>
        </form>

        <?php
            require_once "./ej4/funcionesRel3.php";
            if (isset($_GET['texto'])){
                $texto = $_GET['texto'];
                $textoInvertido = strrev($texto);
                
                $textoMayus = strtoupper($texto);
                $textoMinus = strtolower($texto);
                $caracteres = strlen($texto);
                $cantidadPalabras = count($palabras);

                $palabras = preg_split('/\s+/', $texto);
                $palabrasInvertidas = [];
                for ($i = 0; $i < count($palabras); $i++){
                    array_push($palabrasInvertidas,strrev($palabras[$i]));
                }
                $textoPalabrasInvertidas = implode(" ",$palabrasInvertidas);

                echo "<div class='alert alert-primary'>El texto indicado invertido: $textoInvertido<br>";

                echo ($texto == $textoInvertido) ? "Es palíndromo</div>" : "No es palíndromo</div>";
                
                echo "<div class='alert alert-secondary'>El texto indicado con las palabras invertidas: $textoPalabrasInvertidas</div>";
                
                echo "<div class='alert alert-success'>El texto indicado en mayúsculas: $textoMayus</div>";

                echo "<div class='alert alert-info'>El texto indicado en minúsculas: $textoMinus</div>";
                
                echo "<div class='alert alert-danger'>Caracteres que contiene el texto: $caracteres</div>";
                
                echo "<div class='alert alert-warning'>La cantidad de palabras que el texto contiene es: $cantidadPalabras</div>";

            }  
        ?>
    </div>

    <script src="validacionTextoVacio.js"></script>
    
</body>
</html>