<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comprobar si un número es primo</h1>
    <?php
        $num = 2;
        $i = 2;
        $primo  = true;

        do {
            if ($num % $i == 0){
                $primo = false;
            }
            $i++;
        } while ($primo && $i < $num);

        if ($i >= $num){
            echo "El número $num es primo";
        } else {
            echo "El número $num no es primo";
        }
    ?>
</body>
</html>