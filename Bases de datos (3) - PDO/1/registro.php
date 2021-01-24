<?php
    $conexion = new mysqli();
    $conexion->connect('localhost','root','','ejemplo');

    
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> Registro de Usuario</title>
    </head>

    <body>
        <form action="1.php" method="post">
            <p> Introduzca los datos de su usuario: </br></p>
            <p> Login: <input type="text" name="login"> </p>
            <p> Password: <input type="password" name="password"></p>
            <p> Rol:
                <select name="rol">
                    <option value="-1">Seleccione una opcion</option>
                    <?php 
                        $res = $conexion->query("select * from roles");
                        $datos = $res->fetch_array();
                        while ($datos){
                            print("<option value=\"$datos[0]\">$datos[1] </option>");
                            $datos = $res->fetch_array();
                        }
                    ?>
                </select>
            </p>

            <p><input type="submit" value="Enviar" name="boton"/></p>
           </form>
    </body>
</html>