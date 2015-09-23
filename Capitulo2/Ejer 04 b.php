<!DOCTYPE html>
<!--
Ejer. 4
Multiplicacione, division, suma y resta de dos numeros.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 2</title>
    </head>
    <body>
        <h1>Ejercicio 2. Muestra resultado.</h1>
        <?php
        $x = $_GET['x'];
        $y = $_GET['y'];
        echo "<p>Suma =", $x + $y , "</p>";
        echo "<p>Resta =", $x - $y , "</p>";
        echo "<p>Multiplicación =", $x * $y , "</p>";
        echo "<p>División =", $x / $y , "</p>";
        ?>
    </body>
</html>
