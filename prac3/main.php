<?php
session_start();
if($_POST['guardar']=="si"){
    setcookie('texto',$_POST['texto'],time()+9999);
    setcookie('color',$_POST['color'],time()+9999);
    setcookie('tipo',$_POST['tipo'],time()+9999);
    setcookie('tamaño',$_POST['tamaño'],time()+9999);
}
$_SESSION['contador']++;
$_SESSION['texto'] = $_POST['texto'];
$_SESSION['color'] = $_POST['color'];
$_SESSION['tipo'] = $_POST['tipo'];
$_SESSION['tamaño'] = $_POST['tamaño'];

?>
<html>
    <head>
        <title>Main</title>
    </head>
    <body>
        <p>
            <?php
            echo "<span style=color:",$_SESSION['color'],";" ;
            echo "font-size:",$_SESSION['tamaño'],"px;";
            echo "font-family:",$_SESSION['tipo'];
            echo ">",$_SESSION['texto'],"</span>";
            ?>
        </p>
        <p>
            Has visitado la pagina
            <?php
                echo $_SESSION['contador']," veces";
            ?>
        </p>
    </body>
 <footer>
     <p> <span float="center">Site developed by: <a href="correo.html">ALEX ROMAN</a></span></p>
 </footer>
</html>

