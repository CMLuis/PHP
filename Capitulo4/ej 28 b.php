<!DOCTYPE html>
<!--
Ejercicio 28.
Factorial
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 28.</title>
    </head>
    <body>
        <h1>Resultado del factorial.</h1>
        <?php
        if(isset($_REQUEST['numero'])) {
            $num = $_REQUEST['numero'];
            $resultado = 1;
            for ($i = 1; $i <= $num ; $i++) {
                $resultado *= $i;
            }
            echo "<p>$num ! = $resultado</p>";
        } else {
            echo "<p>No hay ningún número a evaluar</p>";
        }
        ?>
    </body>
</html>
