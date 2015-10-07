<!DOCTYPE html>
<!--
Ejercicio 20.
Piramide hueca. Dar a elegir imagen (de 5 posibles)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 20.</title>
        <?php
        $alt = (isset($_REQUEST['altura']))?($_REQUEST['altura']):3;
        $ima = 'image/' . ((isset($_REQUEST['imagen']))?($_REQUEST['imagen']):"piramide1.jpg");
        ?>
        <style>
            div {
                width: 50px;
                height: 50px;
                display: inline-block;
                //border: 1px solid black;
            }
            .lleno {
                background-image: url("<?= $ima ?>");
            }
        </style>
    </head>
    <body>
        <?php
        for ($i = 0; $i < $alt - 1; $i++) {
            for ($j = 1; $j < $alt - $i; $j++) {
                echo "<div class='vacio'></div>\n";
            }
            echo "<div class='lleno'></div>\n";
            if($j < $alt) {
                for ($j = 0; $j < 2* $i - 1; $j++){
                    echo "<div class='vacio'></div>\n";
                }
                echo "<div class='lleno'></div>\n";
            }
            echo "<br>\n";
        }
        for ($j = 0; $j < 2 * $alt - 1; $j++) {
            echo "<div class='lleno'></div>\n";
        }
        ?>
    </body>
</html>
