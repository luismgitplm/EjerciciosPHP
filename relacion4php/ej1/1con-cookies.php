<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container-fluid w-75">
        <?php 


            function compruebaAcceso($id,$pass){ // función que comprueba usuario reconocido
                define ("USUARIO_CORRECTO","Ali Baba");
                define ("PASS_CORRECTA","Abrete sesamo");

                return ($id == USUARIO_CORRECTO && $pass == PASS_CORRECTA);
               
            }

            $idusuario = $_POST['idusuario'];
            $contrasena = $_POST['contrasena'];
            unset($_SESSION['errorLogin']);

            if (compruebaAcceso($idusuario,$contrasena)){
                setcookie("usuario",$idusuario);
                if (isset($_COOKIE['usuario'])){
                    echo "Te llamas".$_COOKIE["usuario"];
                }

                $_SESSION["usuario"] = $idusuario; // variable de sesión

                echo "Tu eres".$_SESSION["usuario"]." según tu variable de sesión";
            } else {
                $_SESSION["errorLogin"] = true;
                header("Location: login.php");
            }
        ?>

    </div>
</body>
</html>