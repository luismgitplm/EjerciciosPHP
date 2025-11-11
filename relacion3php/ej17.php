<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'ej4/funcionesRel3.php';
    $impares = [];
    $multiplosDeTres = [];

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            array_push($impares, $i);
        }
    }

    for ($i = 1; $i <= 40; $i++) {
        if ($i % 3 == 0) {
            array_push($multiplosDeTres, $i);
        }
    }

    echo "El primer array tiene " . count($impares) . " elementos";
    echo "<br>El segundo array tiene " . count($multiplosDeTres) . " elementos";

    function encontrarMultiploDe5($array)
    {
        $multiploDe5 = false;
        for ($i = 0; $i < count($array); $i++) {
            if ($i % 5 == 0) {
                $multiploDe5 = true;
            }
        }
        return $multiploDe5;
    }
    if (encontrarMultiploDe5($impares)) {
        echo "<br>El primer array tiene por lo menos un múltiplo de 5.";
    } else {
        echo "<br>El primer array no tiene ningún múltiplo de 5.";
    }

    if (encontrarMultiploDe5(($multiplosDeTres))) {
        echo "<br>El segundo array tiene por lo menos un múltiplo de 5";
    } else {
        echo "<br>El segundo array no tiene ningún múltiplo de 5.";
    }

    echo "<br>";
    print_r(array_filter($impares, "esPrimo"));
    echo "<br>";
    print_r(array_filter($multiplosDeTres, "esPrimo"));




    ?>
</body>

</html>