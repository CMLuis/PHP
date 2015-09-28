<!DOCTYPE html>
<!--
Ejercicio 12:
Mini cuestionario.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3. Ejercicio 12</title>
    </head>
    <body>
        <h1>Ejercicio 12. Muestra resultado.</h1>
        <?php
        $resultado = 0;
        for ($i = 1; $i <= 4; $i++) {
            $resultado += $_REQUEST['p' . $i];
        }
        echo "<p>Has conseguido una puntuación de <sup>$resultado</sup>/<sub>4</sub></p>";
        ?>
    </body>
</html>
