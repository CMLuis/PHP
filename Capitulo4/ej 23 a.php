<!DOCTYPE html>
<!--
Ejercicio 23.
Suma hasta 10000.
Mostrar total, contador de numeros y media.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 23.</title>
        <?php
        $total = (isset($_REQUEST['total']))?$_REQUEST['total']:0;
        $total += (isset($_REQUEST['numero']))?$_REQUEST['numero']:0;
        $contador = (isset($_REQUEST['contador']))?($_REQUEST['contador'])+1:0;
        ?>
    </head>
    <body>
        <?php
        if ($total < 10000) {
        ?>
        <h1>Introduce números.</h1>
        <p>Objetivo: Alcanzar un valor acumulado superior a 10.000</p>
        <form action="ej 23 a.php" method="post">
            <input name="numero" type="number" min="0" step="1"/>
            <input name="total" type="hidden" value="<?= $total ?>" />
            <input name="contador" type="hidden" value="<?= $contador ?>" />
            <button type="submit">Acumular</button>
        </form>
        <?php
        } else {
        ?>
        <h1>Resultado.</h1>
        <p>Has alcanzado un acumulado de <?= $total ?> con <?= $contador ?> numeros introducidos.</p>
        <p>La media por numero introducido es de <?= $total / $contador ?></p>
        <?php
        }
        ?>
    </body>
</html>
