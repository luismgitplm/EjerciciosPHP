<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>División mediante algoritmo de resta.</h1>

    <?php
        $num1 = 20;
        $num2 = 6;
        $cociente = 0;

        while($num1 >= $num2){
            $num1 -= $num2;
            $cociente++;
        }

        echo "El cociente es: $cociente y el resto es: $num1";
    ?>
</body>
</html>