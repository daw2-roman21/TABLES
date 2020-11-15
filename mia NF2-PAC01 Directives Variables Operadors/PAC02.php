<?php
session_start();
setcookie("nombre","Alex",time()+120);
$_SESSION['username'] = $_POST['usuari'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['userage'] = $_POST['edad'];
$_SESSION['authuser'] = 0;


//Control de login
if (($_SESSION['username'] == "Alex") and
    ($_SESSION['userpass'] == '123') and
    ($_SESSION['userage'] >= 18)) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'No tienes permiso para ver esta pagina.';
    exit();     
}

?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>PAC01</title>
    </head>
    <body>
        <p>
            <?php
            $comidaFav = urldecode("Macarrones con tomate");
            echo "Bienvenido ";
            echo $_SESSION['username'];
            echo ".<br>Tu pelo es: ",$_GET['colorPelo'];
            echo "<br><a href='comidaFav.php?comidaFav=$comidaFav'>Clica para ver tu comida favorita</a>";
            ?>
        </p>
    </body>
</html>
