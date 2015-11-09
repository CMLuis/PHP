<!DOCTYPE html>
<!--
@autor: Luis Calvente Martínez
Ejercicio 1 del capitulo 6: Sesiones.

Media de un conjunto de números positivos introducidos por teclado.
No se sabe cuantos se introducirán.
Un numero negativo finaliza la cadena.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        session_start(); // Inicio de sesion.
        $contNum =& $_SESSION['contNum']; // Contador de numeros
        if (!isset($contNum)) {
            $contNum = 0;
            $total = 0;
            $num = 0;
            $fin = FALSE;
        } else {
            $total =& $_SESSION['total'];
            $num = $_REQUEST['num']; // Numero introducido
            // Comprobamos que numero es y operamos
            if($num >= 0) {
                $contNum++;
                $total = $total + $num;
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
        <form action="ej1.php" method="post">
            <span>Num: </span><input name="num" type="number" step="1" autofocus>
            <button type="submit">Enviar</button>
        </form>
            <?php
        } else {
            $media = $total/$contNum;
            echo "<p>Media = $media </p>";
        }
        ?>
    </body>
</html>
