<!DOCTYPE html>
<!--
Ejer. 2
Conversor euros a pesetas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 2</title>
    </head>
    <body>
        <h1>Ejercicio 2. Muestra resultado.</h1>
        <?php
        $euros = $_GET['euros'];
        console.log($euros);
        $pesetas = $euros * 166.67;
        $euros_formateados = number_format($euros,2,',','.');
        $pesetas_formateadas = number_format($pesetas,0,',','.');
        echo "<p>", $euros_formateados , " € = ", $pesetas_formateadas , " pesetas</p>";
        ?>
    </body>
</html>