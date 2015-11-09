<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 5. Ejercicio 8</title>
    </head>
    <body>
        <h1>Ordena primos.</h1>
        <?php
        // Generamos el array aleatorio.
        echo "<p>El array generado es:<p>";
        echo "<p>";
        for ($i = 0; $i < 10; $i++) {
            $numeros[$i] = rand(0,100);
            echo $numeros[$i] . " - ";
        }
        echo "</p>";
        
        // Ordenamos primos a la izquierda, se ordenan según vengan.
        for ($i = 0; $i < 10; $i++) {
            if (esPrimo($numeros[$i])) {
                
            }

            //$resultado[$i]
        }
        ?>
    </body>
</html>
