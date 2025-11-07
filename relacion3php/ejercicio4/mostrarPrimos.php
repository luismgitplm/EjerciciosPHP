<!DOCTYPE html>
<html lang="en">

<headmeta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'funcionesRel3.php';

    if (isset($_GET['num'])) {
        $n = (int)$_GET['num'];

        echo "Números primos entre 1 y $n:<br>";
        for ($i = 1; $i <= $n; $i++) {
            if (esPrimo($i)) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>

</html>