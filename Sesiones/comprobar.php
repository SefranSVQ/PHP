<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio Sesiones</title>
    </head>

    <body>
        
        <p>Comprobar - comprobación de la variable de sesión: </p>
        <?php
        session_start();
        if (isset($_SESSION["conectado"])){
            print("Sí, está iniciado.");
        }
        else{
            print("No, no está iniciado.");
        }
        ?>
        <p><a href="index.php">index.php - inicio </a></p>
        <p><a href="conectar.php">conectar.php - establece una variable de sesión </a></p>
        <p><a href="desconectar.php">desconectar.php - destruye la variable de sesión </a></p>
        <p><a href="comprobar.php">comprobar.php - comprueba si la variable de sesión existe o no </a></p>
    </body>

</html>