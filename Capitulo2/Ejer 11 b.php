<!DOCTYPE html>
<!--
Ejer. 11
Conversor Kb a Mb
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 11</title>
    </head>
    <body>
        <h1>Ejercicio 11. Muestra resultado.</h1>
        <?php
        $kb = $_GET['Kb'];
        echo "<p>" , $kb , " Kb = ", $kb / 1024 , " Mb</p>";
        ?>
    </body>
</html>
