<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <?php
    // Recepción de datos mediante get
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $faltas = $_GET['faltas'];
    // Cálculo de la nota final
    $notaFinal = ($nota1 + $nota2) / 2 - 0.25*$faltas; 

    if ($notaFinal >= 5){
        echo"<p>Enhorabuena, has aprobado con un $notaFinal</p>";
    } else {
        echo"<p>Lo sentimos, otra vez será</p>";
    }

    ?>
</body>
</html>