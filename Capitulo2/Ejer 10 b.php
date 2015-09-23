<!DOCTYPE html>
<!--
Ejer. 10
Conversor Mb a Kb
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 10</title>
    </head>
    <body>
        <h1>Ejercicio 10. Muestra resultado.</h1>
        <?php
        $mb = $_GET['Mb'];
        echo "<p>" , $mb , " Mb = ", $mb * 1024 , " Kb</p>";
        ?>
    </body>
</html>
