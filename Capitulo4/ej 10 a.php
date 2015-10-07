<!DOCTYPE html>
<!--
Ejercicio 10:
Calcular media. Numero indefinido de datos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 10.</title>
        <style>
            form {
                display: inline-block;
            }
        </style>
    </head>
    <body>
        
        <?php 
        if (isset($_REQUEST['cantidad'])) {
            $c = $_REQUEST['cantidad'];
        } else {
            $c = 0;
        }
        if (isset($_REQUEST['num'])) {
            if (isset($_REQUEST['media'])) {
                $m = $_REQUEST['media'];
            } else {
                $m = 0;
            }
            $n = $_REQUEST['num'];
            $m = (($m * $c) + $n) / (++$c);
        } else {
            $m = 0;
            $c = 0;
        }
        
        ?>
        
        <h1>Media de numeros.</h1>
        <form action="#" method="post">
            <input name="num" type="number" min="0" step="1" autofocus="autofocus"/>
            <input name="cantidad" type="hidden" value="<?= $c ?>" />
            <input name="media" type="hidden" value="<?= $m ?>" />
            <button type="submit">Enviar</button>
        </form>
        <form action="#" method="post">
            <button type="submit">Reiniciar</button>
        </form>
        <p>Media acumulada = <?= $m ?> </p>
        <p>Cantidad de numeros almacenados: <?= $c ?> </p>
        <?php
        // put your code here
        ?>
    </body>
</html>
