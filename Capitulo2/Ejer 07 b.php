<!DOCTYPE html>
<!--
Ejer. 7
Calculador de facturas sobre la base imponible.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 7</title>
    </head>
    <body>
        <h1>Ejercicio 7. Muestra resultado.</h1>
        <?php
        $baseImp = $_GET['baseImp'];
        $iva = 1.21;
        echo "<p>Total factura =", $baseImp * $iva , "</p>";
        ?>
    </body>
</html>