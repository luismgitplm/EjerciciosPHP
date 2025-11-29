<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones anónimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 60vh;
        }
    </style>
</head>

<body>
    <!--Empleo de funciones anónimas para calcular perímetro, area y volumen de circunferencia, círculo y esfera-->
    <div class="d-flex flex-column justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="mb-3">
            <h2>Circunferencia, Círculo y Esfera</h2>
            <label for="radio" class="form-label">Indique el radio</label>
            <input type="number" class="form-control" name="radio" id="radio">

            <input type="submit" value="Calcular">
        </form>

        <?php
            $circunferencia = function ($num) {
                return 2 * pi() * $num;
            };

            $circulo = function ($num) {
                return pi() * pow($num, 2);
            };

            $esfera = function ($num) {
                return 4 / 3 * pi() * pow($num, 3);
            };

            if (isset($_GET['radio'])){
                $radio = $_GET['radio'];
                $longitudCircunferencia = $circunferencia($radio);
                $areaCirculo = $circulo($radio);
                $volumenEsfera = $esfera($radio);

                echo "<p class='alert alert-primary'>Circunferencia: $longitudCircunferencia unidades</p>";
                echo "<p class='alert alert-primary'>Círculo: $areaCirculo unidades cuadradas</p>";
                echo "<p class='alert alert-primary'>Esfera: $volumenEsfera unidades cúbicas</p>";
            }
        ?>
    </div>
</body>

</html>