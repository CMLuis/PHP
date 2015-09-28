<!DOCTYPE html>
<!--
Ejercicio 13:
Ordenar 3 enteros.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3. Ejercicio 13</title>
    </head>
    <body>
        <h1>Ejercicio 13. Muestra resultado.</h1>
        <?php
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];
        $c = $_REQUEST["c"];
        if ($b > $c) {
            $temporal = $b;
            $b = $c;
            $c = $temporal;
        }
        if ($a > $b) {
            $temporal = $a;
            $a = $b;
            $b = $temporal;
            if ($b > $c) {
                $temporal = $b;
                $b = $c;
                $c = $temporal;
            }
        }
        echo "$a < $b < $c";
        ?>
    </body>
</html>