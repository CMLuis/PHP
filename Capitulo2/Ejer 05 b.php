<!DOCTYPE html>
<!--
Ejer. 5
Área rectángulo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 5</title>
    </head>
    <body>
        <h1>Ejercicio 5. Muestra resultado.</h1>
        <?php
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        echo "<p>Área =", $base * $altura , "</p>";
        ?>
    </body>
</html>
