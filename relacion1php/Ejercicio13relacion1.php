<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial de un número</h1>

    <?php
        $num = -5;
        
        if ($num < 0){
            echo "El factorial de un número negativo no está definido.";
        } else {
            $factorial = 1;
            for ($i=$num; $i > 1 ; $i--) { 
                $factorial *= $i;
            }
        echo "El factorial de $num es: $factorial";
        }
        


    ?>
</body>
</html>