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
        if ($fecha <= 0119) {
            echo "Capricornio";
        } else if ($fecha <= 0218) {
            if (($fecha == 0230) || ($fecha == 0231)) {
                echo "ERROR: Fecha incorrecta";
            } else {
                echo "Acuario";
            }
        } else if ($fecha <= 0320) {
            echo "Piscis";
        } else if ($fecha <= 0419) {
            echo "Aries";
        } else if ($fecha <= 0520) {
            echo "Tauro";
        } else if ($fecha <= 0620) {
            echo "Géminis";
        } else if ($fecha <= 0722) {
            echo "$fecha <br>";
            echo "Cáncer";
        } else if ($fecha <= 0822) {
            echo "Leo";
        } else if ($fecha <= 0922) {
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
