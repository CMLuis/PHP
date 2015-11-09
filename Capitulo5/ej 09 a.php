<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 5. Ejercicio 9</title>
    </head>
    <body>
        <?php
        if (!isset($_REQUEST["resolviendo"])) {
            if (!isset($_REQUEST["num"])) {
                $contadorNumeros = 0;
                $numeroTexto = "";
            } else {
                $num = $_REQUEST["num"];
                $contadorNumeros = $_REQUEST["contadorNumeros"];
                $numeroTexto = $_REQUEST["numeroTexto"];
                if ($contadorNumeros == 1) {
                    $numeroTexto = "$num";
                } else if ($contadorNumeros <= 10) {
                    $numeroTexto = $numeroTexto . " " . $num;
                }
            }
        } else {
            $contadorNumeros = $_REQUEST["contadorNumeros"];
            $numeroTexto = $_REQUEST["numeroTexto"];
            $posInicial = $_REQUEST["posInicial"];
            $posFinal = $_REQUEST["posFinal"];
        }
        
        if ($contadorNumeros < 10) {
            echo "Contador = $contadorNumeros <br>";
            echo "Array =$numeroTexto";
            ?>
            <form action="ej 09 a.php" method="post">
                <span>Introduzca un numero:</span>
                <input type="number" name="num" step="1" autofocus>
                <input type="hidden" name="contadorNumeros" value=" <?= ++$contadorNumeros ?>">
                <input type="hidden" name="numeroTexto" value=" <?=$numeroTexto?>">
                <input type="submit" value="OK">
            </form>
            <?php
            
        } else if ($contadorNumeros == 10){
            ?>
            <form action="ej 09 a.php" method="post">
                <p>Elija la posicion a intercambiar:</p>
                <span>Inicial</span><input type="number" name="posInicial" min="0" max="9" step="1" autofocus>
                <span>Final</span><input type="number" name="posFinal" min="0" max="9" step="1">
                <input type="hidden" name="resolviendo" value="1">
                <input type="hidden" name="contadorNumeros" value=" <?= ++$contadorNumeros ?>">
                <input type="hidden" name="numeroTexto" value=" <?=$numeroTexto?>">
                <input type="submit" value="OK">
            </form>
            <?php
        } else if ($posFinal <= $posInicial) {
            ?>
            <form action="ej 09 a.php" method="post">
                <p>Elija la posicion a intercambiar (final debe ser mayor que inicial):</p>
                <span>Inicial</span><input type="number" name="posInicial" min="0" max="9" step="1" autofocus>
                <span>Final</span><input type="number" name="posFinal" min="0" max="9" step="1">
                <input type="hidden" name="resolviendo" value="1">
                <input type="hidden" name="contadorNumeros" value=" <?= ++$contadorNumeros ?>">
                <input type="hidden" name="numeroTexto" value=" <?=$numeroTexto?>">
                <input type="submit" value="OK">
            </form>
            <?php
        } else {
            // Elimino los espacios en blanco del comienzo que 
            // se agregan automaticamente sin razón aparente.
            while (substr($numeroTexto, 0,1) == " ") {
                $numeroTexto = substr($numeroTexto, 1);
            }
            // Convierto el string en un array.
            $numero = explode(" ", $numeroTexto);
            // Mostramos el array inicial
            echo "<p>Array inicial</p>";
            echo "<pre>";
            for ($i = 0; $i < 10; $i++) {
                echo "$i \t";
            }
            echo "</pre><hr><pre>";
            for ($i = 0; $i < 10; $i++) {
                echo "$numero[$i] \t";
            }
            echo "</pre>";
            
            // Generamos el final
            $final[$posFinal] = $numero[$posInicial];
            for ($j = 1; ($j + $posFinal) % 10 != $posInicial; $j++) {
                $final[($posFinal + $j) % 10] = $numero[($posFinal + $j - 1) % 10];
            }
            for (; $j < 10; $j++) {
                $final[($posFinal + $j) % 10] = $numero[($posFinal + $j) % 10];
            }
            
            
            // Mostramos el array final
            echo "<p>Array final (Pos $posInicial -> Pos $posFinal )</p>";
            echo "<pre>";
            for ($i = 0; $i < 10; $i++) {
                echo "$i \t";
            }
            echo "</pre><hr><pre>";
            for ($i = 0; $i < 10; $i++) {
                echo "$final[$i] \t";
            }
            echo "</pre>";
        }
        
        ?>
    </body>
</html>
