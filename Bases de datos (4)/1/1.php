<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> </title>
        <?php
            try{
                $mysql = 'mysql:host=localhost;dbname=ejemplo';
                $usuario = 'root';
                $contrasena = '';
                $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                $conexion = new PDO($mysql, $usuario, $contrasena);
                print "<p>Conectado a la BBDD</p>";
            }catch (PDOException $e){
                // Mostramos mensaje en caso de error
                print "<p>" .$e->getMessage()."</p>";
            }

            $res = $conexion->query('select * FROM roles');

        ?>
    </head>

    <body>
        <form action="2.php" method="post">
            <p> Roles disponibles: </p> 
            <select name="roles">
                <?php
                    while ($datos = $res->fetch()) {
                        print("<option value=\"$datos[0]\"> $datos[1]</option>");
                    }
                ?>
            </select>
            <p><input type="submit" value="Insertar Nuevo Rol" name="boton"/></p>
        </form>
    </body>

</html>