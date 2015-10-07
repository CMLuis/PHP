<!DOCTYPE html>
<!--
Ejercicio 16.
Es primo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 16.</title>
    </head>
    <body>
        <h1>Calcular si es primo o no.</h1>
        <?php
        if(isset($_REQUEST['numero'])) {
            $num = $_REQUEST['numero'];
            $resultado = "Es primo";
            for ($i = 2; $i < $num; $i++) {
                $resultado = ($num % $i == 0)?"No es primo":$resultado;
            }
            echo "<p>$resultado</p>";
        } else {
            echo "<p>No hay ningún número a evaluar</p>";
        }
        ?>
    </body>
</html>
