<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manejo de superglobals</h1>
    <?php
        echo $_SERVER['DOCUMENT_ROOT'];

        foreach($_SERVER as $clave => $valor){
            echo "$clave : $valor <br>";
        }
    ?>
    
</body>
</html>