<!DOCTYPE html>
<!--
Ejercicio 13.
Lee 10 numeros, y cuenta positivos y negativos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 13</title>
    </head>
    <body>
        <h1>Contando pares e impares.</h1>
        <?php
        if ((isset($_REQUEST['cantidad'])) && (isset($_REQUEST['pares']))) {
            $c = $_REQUEST['cantidad'];
            $p = $_REQUEST['pares'];
        } else {
            $c = 0;
            $p = 0;
        }
        
        if (isset($_REQUEST['numero'])) {
            $n = $_REQUEST['numero'];
            $p = ($n % 2 == 0)? ++$p : $p;
        } else {
            $n = 0;
        }
        
        if ($c < 10) {
        ?>
        <p>Llevas <?= $c ?> numeros introducidos.</p>
        <p>Llevas <?= $p ?> pares</p>
        <form action="ej 13 a.php" method="post">
            <input name="numero" type="number" min="0" step="1"/>
            <input name="cantidad" type="hidden" value="<?= $c + 1 ?>" />
            <input name="pares" type="hidden" value="<?= $p ?>" />
            <button type="submit">Siguiente</button>
        </form>
        <?php
        } else {
        ?>
        <p>Ya has introducido los 10 numeros.</p>
        <p><?= $p ?> de ellos son pares. El resto impar (<?= 10 - $p ?>).</p>
        <?php 
        } 
        ?>
    </body>
</html>
