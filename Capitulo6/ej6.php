<?php session_start(); ?>
<!DOCTYPE html>
<!--
@autor: Luis Calvente Martínez
Ejercicio 6 del capitulo 6: Sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda on-line</title>
        <link rel="stylesheet" href="css/estiloTienda.css">
        <?php
        $productos = [
            "mod1" => ["imagen" => "image/twingo.jpg","modelo" => "Renault Twingo", "precio" => 12000, "desc" => "coche pequeño"],
            "mod2" => ["imagen" => "image/clio.jpg","modelo" => "Renault Clio", "precio" => 18000, "desc" => "coche mediano"],
            "mod3" => ["imagen" => "image/megane.jpg","modelo" => "Renault Megane", "precio" => 24000, "desc" => "coche grande"],
        ];
        
        $costeTotal = 0;
        
        // Inicializar carrita
        $carrito =& $_SESSION['carrito'];
        if(!isset($carrito)) {
            for ($i = 1; $i <= count($productos); $i++) {
                $carrito["mod" . $i] = 0;
            }
        }
        
        // "funcion" añadir a carrito
        $agregar = $_REQUEST['itemAdd'];
        if(isset($agregar)) {
            $carrito[$agregar]++;
        }
        
        // "funcion" quitar del carrito
        $quitar = $_REQUEST['itemRem'];
        if(isset($quitar)) {
            $carrito[$quitar]--;
        }
        
        // "funcion" toogle descripcion
        // Inicializar carrita
        $mostrarDesc =& $_SESSION['mostrarDesc'];
        if(!isset($mostrarDesc)) {
            for ($i = 1; $i <= count($productos); $i++) {
                $mostrarDesc["mod" . $i] = 0;
            }
        }
        
        $toogle = $_REQUEST['toogleDesc'];
        if(isset($toogle)) {
            $mostrarDesc[$toogle] =
                    ($mostrarDesc[$toogle] == 0) ? 1 : 0;
        }
        ?>
    </head>
    <body>
        <header></header>
        <section>
            <h1>Productos</h1>
            <?php
            for ($i = 1; $i <= count($productos); $i++) {
                $p = $productos["mod" . $i];
            ?>
            <article>
                <img src="<?=$p["imagen"]?>">
                <div class="desc">
                    <p class="modelo"><?=$p["modelo"]?></p>
                    <p class="precio">Precio: <?=$p["precio"]?> €</p>
                </div>
                <form action="ej6.php" method="post">
                    <input name="itemAdd" type="hidden" value="<?=("mod".$i)?>">
                    <button>Añadir al carrito</button>
                </form>
                <form action="ej6.php" method="post">
                    <input name="toogleDesc" type="hidden" value="<?=("mod".$i)?>">
                    <button>Descripcion</button>
                </form>
                <?php
                if ($mostrarDesc["mod" . $i] == 1) {
                ?>    
                <div class="descripcion">Descripcion: <?=$p['desc']?></div>
                <?php
                }
                ?>
                <div class="clear"></div>
            </article>
            <?php
            }
            ?>
        </section>
        <aside>
            <h1>Carrito</h1>
            <?php
            for ($i = 1; $i <= count($carrito); $i++) {
                $p = $productos["mod" . $i];
                if($carrito["mod" . $i] > 0) {
            ?>
            <article>
                <img src="<?=$p["imagen"]?>">
                <div class="desc">
                    <p class="modelo"><?=$p["modelo"]?></p>
                    <p class="precio">Precio: <?=$p["precio"]?> €</p>
                    <?php
                    $costeTotal += ($p["precio"] * $carrito["mod" . $i]);
                    ?>
                    <p class="unidades">Unidades: <?=$carrito["mod" . $i]?>
                </div>
                <form action="ej6.php" method="post">
                    <input name="itemRem" type="hidden" value="<?=("mod".$i)?>">
                    <button>Quitar unidad</button>
                </form>
                <div class="clear"></div>
            </article>
            <?php
                }
            }
            ?>
            <article>
                <h3>Total: <?=$costeTotal?></h3>
            </article>
        </aside>
        <!-- No footer por el momento-->
    </body>
</html>
