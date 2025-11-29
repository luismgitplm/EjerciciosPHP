<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Factorial de un número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

   
</head>
<body>
<div class="container mt-5">
    <!--15- Retomamos el ejercicio 13 de la relación anterior, formateamos la entrada
    con Bootstrap, la validamos con JavaScript, pero utilizaremos un mismo
    documento para el formulario, el cálculo y la visualización de resultados
    (juntaremos, por tanto, funcionalidades propias del front y del back). ¿Te
    parece recomendable hacerlo así?-->
    <h1>Factorial de un número</h1>
    <form class="mb-3" method="get" id="form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="mb-3">
            <label for="numero" class="form-label">Ingresa un número:</label>
            <input type="text" class="form-control" id="num" name="num"  required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Factorial</button>
    </form>

     <script>
        const formulario = document.querySelector("#form");
        formulario.addEventListener("submit", (e) => {
            e.preventDefault();

            let error = false;
            const valor = document.getElementById('num').value;
            const num = Number(valor);
            if (valor === '' || Number.isNaN(num) || num < 0) {
                alert('Por favor ingresa un número válido mayor o igual a 0.');
                error = true;
            }
            if (!error) formulario.submit();
        }) 
           
    </script>

    <?php
        
        if (isset($_GET['num'])) {
            $num = intval($_GET['num']);
            
            if ($num < 0){
                echo "<div class='alert alert-danger'>El factorial de un número negativo no está definido.</div>";
            } else {
                $factorial = 1;
                for ($i=$num; $i > 1 ; $i--) { 
                    $factorial *= $i;
                }
                echo "<div class='alert alert-success'>El factorial de $num es: $factorial</div>";
            }
        }
    ?>
</div>
</body>
</html>
