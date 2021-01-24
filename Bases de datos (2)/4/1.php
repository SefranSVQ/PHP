<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio de selectores</title>
        <?php
            session_name("alumnos");
            session_start();

            $conexion = new mysqli();
            $conexion->connect('localhost','root','','ejemplo');

            if(isset($_REQUEST["codigocurso"])&& isset($_GET["codalumno"])){
                $codcurso = $_REQUEST["codigocurso"];
                $codAlumno = $_GET["codalumno"];
                
                $conexion->query("update alumnos set codigocurso='$codcurso' where codigo='$codAlumno'");

            }

            

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
                        print("<a href=\"2.php?codigo=$datos[0]\">");
                        print("$datos[1] - Matriculado en : $datos[6] </br>");
                        print("</a>");
                        $datos = $res->fetch_array();
                    }
                    $conexion->close();
                ?>
        </form>
    </body>

</html>