<!DOCTYPE html>
<!--
Ejer. 6
Área triángulo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 6</title>
    </head>
    <body>
        <h1>Ejercicio 6. Muestra resultado.</h1>
        <?php
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        echo "<p>Área =", $base * $altura / 2 , "</p>";
        ?>
    </body>
</html>
