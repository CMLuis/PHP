<!DOCTYPE html>
<!--
@autor: Luis Calvente Martínez
Ejercicio 2 del capitulo 6: Sesiones.

igual que el 1 pero con 
    - media de impares
    - mayor de pares
    - negativo para terminar
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        session_start(); // Inicio de sesion.
        $contNum =& $_SESSION['contNum']; // Contador de numeros
        $contNoPar =& $_SESSION['contNoPar'];
        $mayorPar =& $_SESSION['mayorPar'];
        $totalNoPar =& $_SESSION['totalNoPar'];
            
        if (!isset($contNum)) {
            $contNum = 0;
            $totalNoPar = 0;
            $contNoPar = 0;
            $mayorPar = 0;
            $num = 0;
            $fin = FALSE;
        } else {
            $num = $_REQUEST['num']; // Numero introducido
            // Comprobamos que numero es y operamos
            if($num >= 0) {
                $contNum++;
                if ($num % 2 == 0) {
                    if ($num > $mayorPar) {
                        $mayorPar = $num;
                    }
                } else {
                    $totalNoPar += $num;
                    $contNoPar++;
                }
                $fin = FALSE;
            } else {
                $fin = TRUE;
            }
        }
        // Ya hemos terminado con las comprobaciones y operaciones
        ?>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <?php
        // Ahora toca mostrar por pantalla.. 
        //      - Tanto las peticiones  fin = false
        //      - Como los resultados   fin = true
        if (!$fin) {
            ?>
        <p>Introduce un numero (negativo para terminar).</p>
        <form action="ej2.php" method="post">
            <span>Num: </span><input name="num" type="number" step="1" autofocus>
            <button type="submit">Enviar</button>
        </form>
            <?php
        } else {
            // Contador total
            echo "<p>Contador Numeros = $contNum </p>";
            // media impares
            echo "<p>Media impares = " . ($totalNoPar / $contNoPar) . "</p>";
            // mayor pares
            echo "<p>Mayor de los pares = $mayorPar";
        }
        ?>
    </body>
</html>
