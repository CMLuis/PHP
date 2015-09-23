<!DOCTYPE html>
<!--
Ejer. 8
Calculador de facturas sobre la base imponible.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 8</title>
    </head>
    <body>
        <h1>Ejercicio 8. Muestra resultado.</h1>
        <?php
        $horas = $_GET['horas'];
        $salarioHora = 12;
        echo "<p>Salaria final = ", $horas * $salarioHora , "</p>";
        ?>
    </body>
</html>