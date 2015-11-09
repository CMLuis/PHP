<?php
session_start();
?>
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
        <style>
            div#contenedor {
                text-align: center;
            }
            
            div#pantalla {
                width: 80px;
                height: 20px;
                border-radius: 30%;
                border: 1px black solid;
                margin-bottom: 5px;
                display: inline-block;
                text-align: right;
                padding-right: 20px;
            }
            div#teclado {
                width: 120px;
                display: inline-block;
                text-align: center;
            }
            form {
                display: inline-block;
            }
        </style>
        <?php
        // Usuarios ya registrados.
        $permitidos = [
            "user1" => 1234,
            "user2" => 1111,
        ];
        
        $estado =& $_SESSION['estado'];
        if (!isset($estado)) { $estado = 0; }
        
        $user =&  $_SESSION['user'];
        if (!isset($user)) { $user = "none"; }
        $usuario = $_REQUEST['usuario'];
        
        $pass =& $_SESSION['pass'];
        if (!isset($pass)) { $pass = 0; }
        
        $intento =& $_SESSION['intento'];
        if (!isset($intento)) { $intento = 0; }
        
        $contra =& $_SESSION['contra'];
        if (!isset($contra)) { $contra = 0; }
        $cifra = $_REQUEST['cifra'];
        
        /*
         * Estado 0 - Pedimos usuario
         * Estado 1 - Pedimos contraseña
         * Estado 2 - Comprobamos identidad .. Redireccionamos
         */
        
        if (($estado == 0) && (isset($usuario))) {
            $estado = 1;
            $user = $usuario;
        } else if ($estado == 1) {
            if (($contra < 4) && (isset($cifra))) {
                $contra++;
                $pass = $pass * 10 + $cifra;
            }
            if ($contra >= 4) {
                $estado = 2;
            }
        }
        $incorrecto = false;
        $fin = false;
        if ($estado == 2) {
            // Si llegamos aqui ya tenemos $user y $pass definidos
            if ($permitidos[$user] == $pass) {
                header('Location: index.php');
            } else if($intento < 3) {
                $incorrecto = true;
                $contra = 0;
                $pass = 0;
                $intento++;
                $estado = 0;
            } else {
                $incorrecto = true;
                $fin = true;
            }
        }
        ?>
    </head>
    <body>
        <p>User = <?=$user?></p>
        <p>Permitido[user] = <?=$permitidos[$user]?></p>
        <p>Pass = <?=$pass?> </p>
        <p>Contra = <?=$contra?> </p>
        <p>Cifra = <?=$cifra?></p>
        <p>Estado = <?=$estado?></p>
        <p>Incorrecto = <?=$incorrecto?></p>
        <p>Fin = <?=$fin?></p>
        <?php        print_r($_SESSION); ?>
        <h1>Inicio</h1>
        <?php
        if ($incorrecto) { echo "<p>Usuario o contraseña incorrectos</p>"; }
        if ($fin) {
            echo "<p>Sistema bloqueado. Ha consumido sus intentos.</p>";
        } else {
            if ($estado == 0) {
            ?>
        <div id="contenedor">
            <p>Introduzca su usuario</p>
            <form action="ej4.php" method="post">
                User: <input type="text" name="usuario" autofocus>
                <button>Continuar</button>
            </form>
        </div>
            <?php 
            } else if ($estado == 1) {
            ?>
        <p>Introduzca su contraseña (consulte con el administrador de sistema si no la recuerda)</p>
        <div id="contenedor">
            <div id="pantalla"><?=$pass?></div><br>
            <div id="teclado">
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="1">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="2">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="3">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="4">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="5">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="6">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="7">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="8">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="9">
                </form>
                <form action="ej4.php" method="post">
                    <input type="submit" name="cifra" value="0">
                </form>
            </div>
        </div>
            <?php 
            }
        }
        ?>
    </body>
</html>
