<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 5. Ejercicio 7</title>
    </head>
    <body>
        <h1>Ordena array. Pares izq, Impares der.</h1>
        <?php
        // Generamos el array aleatorio.
        echo "<p>El array generado es:<p>";
        echo "<p>";
        for ($i = 0; $i < 20; $i++) {
            $numeros[$i] = rand(0,100);
            echo $numeros[$i] . " - ";
        }
        echo "</p>";
        
        // Ordenamos el array.
        $i = 0;
        $j = 19;
        foreach ($numeros as $num) {
            if($num % 2 == 0) {
                $resultado[$i] = $num;
                $i++;
            } else {
                $resultado[$j] = $num;
                $j--;
            }
        }
        
        // Mostramos el resultado
        echo "<p>Resultado:</p>";
        echo "<p>";
        for ($i = 0; $i < 20; $i++) {
            echo $resultado[$i] . " - ";
        }
        echo "</p>";
        ?>
    </body>
</html>
