<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio de selectores</title>
        <?php
                    $conexion = new mysqli();
                    $conexion->connect('localhost','root','','ejemplo');
        
                    $res = $conexion->query("select * from alumnos
                        inner join cursos on alumnos.codigocurso = cursos.codigo");

                    $datos = $res->fetch_array();

                ?>
    </head>

    <body>
        <form action="2.php" method="post">
            <p>Listado de alumnos: </p>
            
                <?php 
                    while ($datos){
                        print("$datos[1] - Matriculado en : $datos[6] </br>");
                        $datos = $res->fetch_array();
                    }
                    $conexion->close();
                ?>
        </form>
    </body>

</html>