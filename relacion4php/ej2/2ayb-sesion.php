<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario petición numérica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 60vh;
        }
    </style>
</head>

<body>

    <div class="container-fluid w-75" id="wrapper">
        <?php 
            if (!isset($_SESSION['a'])){
                $_SESSION['a'] = 0;
                $_SESSION['b'] = 0;
            }
        ?>
        <?php 
            if (isset($_POST['enviar'])){
                switch($_POST['operacion']){
                    case "+a": 
                        $_SESSION['a']++;
                        break;

                    case "-a": 
                        $_SESSION['a']--;
                        break;

                    case "+b": 
                        $_SESSION['b']++;
                        break;

                    case "-b": 
                        $_SESSION['b']--;
                        break;

                    case "ra":
                        $_SESSION['a'] = 0;
                        break;

                    case "rb":
                        $_SESSION['b'] = 0;
                        break;

                    case "ds":
                        $_SESSION['a'] = 0;
                        $_SESSION['b']= 0;
                        session_destroy();
                        break;
                }
            }

        ?>
        <h1>A : <?php echo $_SESSION['a']; ?></h1>
        <h1>B : <?php echo $_SESSION['b']; ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <select name="operacion" id="operacion">
                <option value="+a">Incrementar A</option>
                <option value="-a">Decrementar A</option>
                <option value="+b">Incrementar B</option>
                <option value="-b">Decrementar B</option>
                <option value="ra">Resetear A</option>
                <option value="rb">Resetear B</option>
                <option value="ds">Destruir sesión</option>
            </select>

            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>

        
    </div>

    
</body>

</html>