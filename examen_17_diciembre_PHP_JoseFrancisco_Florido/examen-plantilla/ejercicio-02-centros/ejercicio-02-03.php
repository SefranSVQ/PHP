<?php

  session_name("ejercicio2");
  session_start();

  if (!isset($_GET["id"])){
    $_SESSION["mensaje1"] = "Redireccion a la pag 1";
    $_SESSION["accion"] = "redireccion";
    header("Location: ejercicio-02-01.php");
  }

  $conexion = new mysqli ('localhost', 'root', '', 'dwes_dic2020');

  if ($conexion->connect_errno != null) {
    print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
    exit();
  }   

  $dept = $_GET["id"];

  $resultado = $conexion->query("select * from empleados where departamento = $dept");




?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Empresa - Centros - Departamentos - Empleados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Listado de Empleados del Departamento</h1>

  <div>

  <?php
    print("<p>Empleados: </p>");
    print("<table style=\"border: 1px black solid; text-align: center\">");
    print("<thead>");
      print("<th> Nombre </th> <th> Apellidos </th> <th> Salario </th> <th> Hijos </th> <th> Nacionalidad </th>");
    print("</thead>");
      while ($row = $resultado->fetch_array()){
        print("<tr>");
        print("<td>$row[1]</td>");
        print("<td>$row[2]</td>");
        print("<td>$row[3]</td>");
        print("<td>$row[4]</td>");
        $resultado2 = $conexion->query("select nacionalidad from paises where id = $row[5]");
        $nacionalidad = $resultado2->fetch_array();
        print("<td>$nacionalidad[0]</td>");
        print("</tr>");
      }
      print("</table>");
      $conexion->close();

    ?>
    
    <p>
      <a href="ejercicio-02-01.php">Volver</a>
    </p>
  </div>
</body>
</html>
