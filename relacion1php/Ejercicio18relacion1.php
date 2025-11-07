<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Máximo común divisor mediante algoritmo de resta.</h1>

    <?php
        $num1 = 20;
        $num2 = 10;

       while($num1 != $num2){
            if($num1 > $num2){
                $num1 -= $num2;
            } else {
                $num2 -= $num1;
            }
       }

       echo "El mcd de ambos números es: $num1";
    ?>
</body>
</html>