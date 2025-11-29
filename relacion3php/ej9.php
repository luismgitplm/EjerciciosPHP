<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--9- Haz un programa PHP que pida un texto por formulario y a continuación
    extraiga y muestre la palabra más larga. Todo en el mismo archivo-->
    <div class="d-flex flex-column justify-content-center align-items-center" id="wrapper">
        <form method="get" id="form" class="mb-3">
            <h2>Palabra más larga</h2>
            <label for="texto" class="form-label">Escriba un texto</label>
            <input type="text" class="form-control" name="texto" id="texto">

            <input type="submit" value="Enviar">
            <div id="alerta"></div>
        </form>

        <?php
            require_once "./ej4/funcionesRel3.php";
            if (isset($_GET['texto'])){
                $texto = $_GET['texto'];
                $palabraMasLarga = palabraMasLarga($texto);

                echo "La palabra más larga es: $palabraMasLarga";
            }  
        ?>
    </div>

    <script src="validacionTextoVacio.js"></script>
    
</body>
</html>