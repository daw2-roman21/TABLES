<?php
session_unset();
?>
<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <form method="post" action="PAC02.php?colorPelo=moreno">
   <p>Fica el teu usuari: 
    <input type="text" name="usuari"/>
   </p>
   <p>Fica la teva password: 
    <input type="password" name="pass"/>
   </p>
   <p>Fica la teva edat(Has de ser major d'edat per veure la pàgina): 
    <input type="number" name="edad"/>
   </p>   
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>