<?php

    $conexion = new mysqli();
    $conexion->connect('localhost','root','','ejemplo');

    $res = $conexion->query("select count(nombre) from cursos");
    $datos = $res->fetch_array();

    print("Cantidad de cursos: $datos[0] </br>");

    $res = $conexion->query("select * from cursos");
    $datos = $res->fetch_array();
    while ($datos){
        print("</br> Nombre del curso: $datos[1]");
        $datos = $res->fetch_array();

        $resins = $conexion->query("select count(nombre) from alumnos where codigocurso='$datos[0]'");
        print($resins);
        $datosins = $resins->fetch_array();
        print("</br> Inscritos: $datosins[0]");

        print("</br> Nombres y apellidos: ");

    }
    
    
?>