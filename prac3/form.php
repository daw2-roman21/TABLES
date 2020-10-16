<?php
session_unset();
?>
<html>
 <head>
  <title>Seleccion</title>
 </head>
 <body>
  <form method="post" action="main.php">
   <p>Introduce un texto
    <input type="text" name="texto"/>
   </p>
   <p>Escoge el color del texto: 
    <input type="color" name="color"/>
   </p>
   <p>Escoge el tipo de fuente:<br> 
    <input type="radio" id="Verdana" name="tipo" value="Verdana">
    <label for="Verdana">Verdana</label><br>
    <input type="radio" id="Arial" name="tipo" value="Arial">
    <label for="Arial">Arial</label><br>
    <input type="radio" id="Bodoni" name="tipo" value="Bodoni">
    <label for="Bodoni">Bodoni</label>
   </p>   
   <p>Escoge el tamaño del texto: 
    <input type="number" name="tamaño"/>
   </p>
   <p>Quieres guardar la informacion?:<br> 
    <input type="radio" id="si" name="guardar" value="si">
    <label for="si">si</label><br>
    <input type="radio" id="no" name="guardar" value="no">
    <label for="no">no</label><br>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
  <footer>
     <p> <span float="center">Site developed by: <a href="correo.html">ALEX ROMAN</a></span></p>
 </footer>
</html>