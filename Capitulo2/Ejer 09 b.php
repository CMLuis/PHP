<!DOCTYPE html>
<!--
Ejer. 9
Volumen de un cono V = 1/3 pi r² h
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 9</title>
    </head>
    <body>
        <h1>Ejercicio 9. Muestra resultado.</h1>
        <?php
        $radio = $_GET['radio'];
        $altura = $_GET['altura'];
        $pi = 3.1416;
        echo "<p>Volumen del cono = ", ($radio * $radio * $altura * $pi / 3) , "</p>";
        ?>
    </body>
</html>
