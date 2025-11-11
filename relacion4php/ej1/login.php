<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .form-text{
            visibility: hidden;
        }
    </style>
</head>
<body>
     <div class = "d-flex justify-content-center align-items-center" id = "wrapper">
    <form action="1con-cookies.php" method = "post" class = "m-auto p-3 w-50" id = "form1">
        <h2>Identificación de Usuario</h2>
        <div class = "mb-3">
            <label for = "idusuario" class = "form-label">ID:</label>
            <input type = "text"  class = "form-control" name = "idusuario" id = "idusuario">
            <div id = "nota1Help" class = "form-text text-danger">La nota debe ser un número entero entre 1 y 10</div>
        </div>
        <div class = "mb-3">
            <label for = "contrasena" class = "form-label">Contraseña:</label>
            <input type = "text"  class = "form-control" name = "contrasena" id = "contrasena">
            <div id = "nota2Help" class = "form-text text-danger">La nota debe ser un número entero entre 1 y 10</div>
        </div>
        
            <input type="submit" value="Enviar">
    </form>

    <?php 
        if (isset($_SESSION['errorLogin'])){
            echo "<div class='alert alert-danger my-3' role = 'alert'> <p>usuario o contraseña desconocido</p></div>";
        }
    ?>
    </div>
    