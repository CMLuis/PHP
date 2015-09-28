<!DOCTYPE html>
<!--
Ejercicio 10:
Horoscopo a partir de día y mes de nacimiento.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 3. Ejercicio 10</title>
    </head>
    <body>
        <h1>Ejercicio 10. Recogida de datos.</h1>
        <p>Horoscopo. ¿Cuando naciste? (Día y mes en numero)</p>
        <form method="post" action="ej 10 b.php">
            Día: <input name="dia" type="number" min="1" max="31" step="1" /><br>
            Mes: <input name="mes" type="number" min="1" max="12" step="1" /><br>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
