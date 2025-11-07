<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .divisor {
            color:red;
        }

    </style>
</head>
<body>
    <h1>Indicar los divisores de un número</h1>

    <?php
        $num = 20;

        if($num < 1){
            echo "El número no puede tener divisores.";
        } else{
            echo "Los divisores de $num:<br>";
            for ($i=1; $i <= $num; $i++) { 
                if($num % $i == 0){
                    echo "<span class='divisor'>$i</span> ";
                } else{
                    echo "$i ";
                }
            }
        }

    ?>
</body>
</html>