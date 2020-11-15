<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>ComidaFavorita</title>
    </head>
    <body>
        <p>
            <?php
                echo "<h1>Hola ",$_COOKIE["nombre"],"(aquí debería ir la cookie pero por alguna razón no va)";
                echo " Tu comida favorita es: ",$_GET['comidaFav'],".</h1><br>";
                echo "<br>Hoy es ",date("d/m/yy");
            ?>
        </p>
    </body>
</html>