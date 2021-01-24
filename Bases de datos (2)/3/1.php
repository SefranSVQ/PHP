<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio de selectores</title>
        <?php
                    $conexion = new mysqli();
                    $conexion->connect('localhost','root','','ejemplo');
        
                    $res = $conexion->query("select count(nombre) from alumnos");

                    $datos = $res->fetch_array();

                ?>
    </head>

    <body>
        <p><a href="2.php"> Total de alumnos: 
        
            <?php 
                print($datos[0]);
            ?>

        . Pinche para mostrar sus datos.</a></p>
    </body>

</html>