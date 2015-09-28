<!DOCTYPE html>
<!--
Ejercicio 2:
Saludo según la hora del día que sea.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3. Ejercicio 9</title>
    </head>
    <body>
        <h1>Ejercicio 3. Muestra resultado.</h1>
        <?php
        $a = $_REQUEST("a");
        $b = $_REQUEST("b");
        $c = $_REQUEST("c");
        if (($hora > 6) && ($hora < 12)) {
            echo "Buenos dias.";
        } else if ($hora < 20) {
            echo "Buenas tardes.";
        } else {
            echo "Buenas noches.";
        }
        ?>
    </body>
</html>
