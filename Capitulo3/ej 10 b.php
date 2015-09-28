<!DOCTYPE html>
<!--
Ejercicio 10:
Horóscopo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3. Ejercicio 10</title>
    </head>
    <body>
        <h1>Ejercicio 10. Muestra resultado.</h1>
        <?php
        $dia = $_REQUEST["dia"];
        $mes = $_REQUEST["mes"];
        $fecha = $mes * 100 + $dia;
        echo "Fecha = #", $fecha, "#<br>";
        if ($fecha <= 119) {
            echo "Capricornio";
        } else if ($fecha <= 218) {
            echo "Acuario";
        } else if ($fecha <= 320) {
            if (($fecha == 230) || ($fecha == 231)) {
                echo "ERROR: Fecha incorrecta";
            } else {
                echo "Piscis";
            }
        } else if ($fecha <= 419) {
            echo "Aries";
        } else if ($fecha <= 520) {
            echo "Tauro";
        } else if ($fecha <= 620) {
            echo "Géminis";
        } else if ($fecha <= 722) {
            echo "$fecha <br>";
            echo "Cáncer";
        } else if ($fecha <= 822) {
            echo "Leo";
        } else if ($fecha <= 922) {
            echo "Virgo";
        } else if ($fecha <= 1022) {
            echo "Libra";
        } else if ($fecha <= 1121) {
            echo "Escorpión";
        } else if ($fecha <= 1221) {
            echo "Sagitario";
        } else {
            echo "Capricornio";
        }
        ?>
    </body>
</html>
