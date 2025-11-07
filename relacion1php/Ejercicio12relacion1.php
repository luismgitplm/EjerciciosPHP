<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sentencias switch</h1>

    <?php
    $nota = 17;

    switch ($nota){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo("Nota final: insuficiente");
            break;
        case 5:
            echo("Nota final: suficiente");
            break;
        case 6:
            echo("Nota final: bien");
            break;
        case 7:
        case 8:
            echo("Nota final: notable");
            break;
        case 9:
        case 10:
            echo("Nota final: sobresaliente");
            break;
        default:
            echo("Nota errónea.");
            break;

            
    }

    ?>
</body>
</html>