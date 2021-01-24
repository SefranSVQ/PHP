<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio de selectores</title>
        <?php
            $conexion = new mysqli();
            $conexion->connect('localhost','root','','ejemplo');

            $res = $conexion->query("select * from cursos");
            $datos = $res->fetch_array();

        ?>
    </head>

    <body>
        <form action="2.php" method="post">
            <p>Nombre: <input type="text" name="nombre" min="3" max="20"></p>
            <p>Apellidos: <input type="text" name="apellidos" min="5" max="50"></p>
            <p>Correo: <input type="email" name="correo"></p>
            <p>Código Curso: 
                <select name="codcurso">
                    <?php 
                        while ($datos){
                            print("<option value=\"$datos[0]\"> $datos[1]</option>");
                            $datos = $res->fetch_array();
                        }
                        $conexion->close();
                    ?>
                </select>
            </p>
            <p><input type="submit" value="Añadir Usuario"/></p>
        </form>
    </body>

</html>