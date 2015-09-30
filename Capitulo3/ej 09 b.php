<!DOCTYPE html>
<!--
Ejercicio 9:
Resolver ecuación de segundo grado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3. Ejercicio 9</title>
    </head>
    <body>
        <h1>Ejercicio 9. Muestra resultado.</h1>
        <?php
        $a = $_POST["a"];
        $b = $_REQUEST["b"];
        $c = $_REQUEST["c"];
        $temp1 = $b * $b;
        $temp2 = (4 * $a * $c);
        if ($temp1 < $temp2) {
            echo "Las soluciones de la ecuación son complejas.";
        } else if ($a == 0) {
            echo "División entre 0";
        } else {
            echo "solucion 1 = ", ( - $b + sqrt($temp1 - $temp2) ) / - 2 * $a;
            echo "<br>";
            echo "solucion 2 = ", ( - $b - sqrt($temp1 - $temp2) ) / - 2 * $a;
        }
        ?>
    </body>
</html>