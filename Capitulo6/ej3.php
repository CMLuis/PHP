<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        session_start();
        $contador =& $_SESSION['contador'];
        $total =& $_SESSION['total'];
        if(!isset($contador)) {
            $contador = 0;
            $total = 0;
            $fin = FALSE;
        } else {
            $num = $_REQUEST['num'];
            if (isset($num)){
                $total += $num;
                $contador++;
                $fin = ($total >= 10000)? TRUE : FALSE;
            }
        }
        ?>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <?php
        if (!$fin) {
        ?>
        <form action="ej3.php" method="post">
            <span>Numero: </span>
            <input type="number" name="num" step="1" min="0" autofocus>
            <button>Enviar</button>
        </form>
        <?php
        } else {
        ?>
        
        <p>Suma total = <?=$total?>.</p>
        <p>Cantidad numeros = <?=$contador?></p>
        <p>Media = <?=($total/$contador)?></p>
        
        <?php
        }
        ?>
    </body>
</html>
