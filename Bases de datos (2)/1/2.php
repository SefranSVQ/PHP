<?php

    $datos = $_REQUEST;

    if (isset($datos["nombre"]) && isset($datos["apellidos"])
     && isset($datos["correo"]) && isset($datos["codcurso"])){
        if ($datos["codcurso"] > 0 && $datos["codcurso"] < 4){

            $nombre = $_REQUEST["nombre"];
            $apellidos = $_REQUEST["apellidos"];
            $correo = $_REQUEST["correo"];
            $codigo = $_REQUEST["codcurso"];

            $conexion = new mysqli();
            $conexion->connect('localhost','root','','ejemplo');

            $res = $conexion->query("INSERT INTO alumnos (nombre, apellidos, email, codigocurso) 
                VALUES ('$nombre', '$apellidos', '$correo', '$codigo')");
            if ($res){
                print "Insertado";
            }
            else {
                print "No insertado";
            }
        }else {
            print("El código de curso no es válido.");
        }
    } else {
        print("Introduzca todos los datos, por favor.");
    }

?>