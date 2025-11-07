<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nota con rúbrica</h1>
    <?php

    /*8- Crea en un script PHP dos arrays asociativos paralelos, uno con la rúbrica de 
    4 calificaciones (inicial, primera, segunda y tercera) y otro con las notas 
    particulares de una persona. A continuación, computará la nota final de esa 
    persona, y muéstrala por pantalla. */
        $notaFinal = 0;
        $rubrica = ["inicial" => 0.20,
                    "primera" => 0.30,
                    "segunda" => 0.20,
                    "tercera" => 0.30];

        $calificaciones = ["inicial" => 8,
                        "primera" => 5,
                        "segunda" => 9,
                        "tercera" => 6];
        
        foreach ($rubrica as $prueba => $peso){
            $notaFinal += $peso *$calificaciones[$prueba];
        }

        
        if ($notaFinal >= 5){
            echo"<p>Enhorabuena, has aprobado con un $notaFinal</p>";
        } else {
            echo"<p>Lo sentimos, otra vez será</p>";
        }
        

    ?>
</body>
</html>