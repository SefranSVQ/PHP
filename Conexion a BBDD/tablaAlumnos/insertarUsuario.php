<?php
    $nombre = $_REQUEST["nombre"];
    $apellidos = $_REQUEST["apellidos"];
    $correo = $_REQUEST["correo"];
    $codigo = $_REQUEST["codigo"];

    $conexion = new mysqli();
    $conexion->connect('localhost','root','','ejemplo');

    $conexion->prepare("INSERT INTO alumnos VALUES ($nombre, $apellidos, $correo, $codigo)");
    //$sentencia->execute();
    //$valor = $conexion->query($sentencia);

?>