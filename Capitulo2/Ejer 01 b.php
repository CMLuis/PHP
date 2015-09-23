<!DOCTYPE html>
<!--
Ejer. 1
Realiza un programa que pida dos números y luego muestre el resultado
de su multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 2. Ej 1</title>
    </head>
    <body>
        <h1>Ejercicio 1. Muestra resultado.</h1>
        <?php
        $num1 = $_GET['num1'];
        console.log($num1);
        $num2 = $_GET['num2'];
        console.log($num2);
        echo "<p>Resultado = ", $num1 * $num2 , "</p>";
        // echo $_GET['num1'], " " , $_GET['num2'];
        ?>
    </body>
</html>
