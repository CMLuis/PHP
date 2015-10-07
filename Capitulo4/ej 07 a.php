<!DOCTYPE html>
<!--
Ejercicio 7.
Control de acceso a una caja fuerte.
    Numero de 4 cifras
    4 oportunidades.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 1</title>
    </head>
    <body>
        <h1>Caja fuerte.</h1>
        <p>Adivina la combinación de la caja fuerte.</p>
        <?php
        $combinacion = 1234;
        
        if(isset($_REQUEST['count'])) {
            $cuenta = $_REQUEST['count'];
        } else {
            $cuenta = 5;
        }
        echo "<p>Dispones de $cuenta intentos.</p>";
        ?>
        <form method="post" action="ej 07 a.php">
            <input name="pass" type="number" min="0" max="9999" step="1" size="4" />
        <?php
        if ($cuenta > 0) {?>
            <input name="count" type="hidden" value="<?= $cuenta - 1 ?>" />
            <button type="submit">Enviar</button>
        <?php
        } else { 
            echo "<p>Has consumido todos tus intentos.</p>";
        }
        ?>
            
        </form>
        <?php
        if(isset($_REQUEST['pass'])) {
            if($combinacion == $_REQUEST['pass']){
                echo "<p>Combinación correcta.</p>";
            } else {
                echo "<p>Combinación incorrecta.</p>";
            }
        }
        
        ?>
    </body>
</html>
