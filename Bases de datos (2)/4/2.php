<?php
    session_name("alumnos");
    session_start();
    $cod = ($_REQUEST['codigo']);

    $conexion = new mysqli();
    $conexion->connect('localhost','root','','ejemplo');

    $res = $conexion->query("select * from alumnos
        where codigo='$cod'");

    $datos = $res->fetch_array();

    print("<form action=\"1.php?codalumno=$datos[0]\" method=\"post\">");
    print("<p>Modifique el código del curso del alumno: </p>");
    print("<ul>");
    print("<li>Nombre: $datos[1] </li>");
    print("<li>Apellidos: $datos[2] </li>");
    print("<li>Correo: $datos[3] </li>");
    print("Curso: <select name=\"codigocurso\" value=\"codigocurso\">");
    $res = $conexion->query("select * from cursos");
    $datos = $res->fetch_array();
    while ($datos){
        print("<option value=\"$datos[0]\"> $datos[1]</option>");
        $datos = $res->fetch_array();
    }
    $conexion->close();
    print("</select>");
    print("<p><input type=\"submit\" value=\"Modificar curso de alumno\"/></p>");
    print("</form>");
?>