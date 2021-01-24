<?php
   session_start();
   if(!isset($_SESSION["num"])){
        $_SESSION["num"] = 0;
   }
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio Sesiones</title>
    </head>

    <body>
        <p>Ejercicio 1</p>
        <h1> Subir y bajar número </h1>
        <p> Haga click en los botones para modificar el valor.</p>
        <form action="modificar.php" method="post"> 
            <p><input type="submit" name="modificar" value="Subir"> <?php print($_SESSION["num"]); ?> <input type="submit" name="modificar" value="Bajar"></p>
            <p><input type="submit" name="modificar" value="Poner a cero"> </p>
        </form>
    </body>

</html>