<!DOCTYPE html>
<!--
Ejercicio 20.
Piramide hueca. Dar a elegir imagen (de 5 posibles)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 4. Ejercicio 20.</title>
    </head>
    <body>
        <h1>Características de la piramide.</h1>
        <form action="ej 20 b.php" method="post">
            <input name="altura" type="number" min="3" step="1" /><br>
            <input name="imagen" type="radio" value="piramide1.jpg" default="default"/> Ladrillo<br>
            <input name="imagen" type="radio" value="piramide2.jpg" /> Piramide<br>
            <input name="imagen" type="radio" value="piramide3.png" /> Bola<br>
            <input name="imagen" type="radio" value="piramide4.png" /> Iluminati<br>
            <input name="imagen" type="radio" value="piramide5.jpg" /> Smile<br>
            <button type="submit">Procesar</button>
        </form>
    </body>
</html>
