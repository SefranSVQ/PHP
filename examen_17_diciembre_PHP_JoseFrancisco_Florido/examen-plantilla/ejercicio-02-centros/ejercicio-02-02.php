<?php

  session_name("ejercicio2");
  session_start();

  if (!isset($_POST["centros"])){
    $_SESSION["mensaje1"] = "Redireccion a la pag 1";
    $_SESSION["accion"] = "redireccion";
    header("Location: ejercicio-02-01.php");
  }

  if ($_POST["centros"] == "-1"){
    $_SESSION["mensaje1"] = "No ha introducido ningun centro.";
    $_SESSION["accion"] = "redireccion";
    header("Location: ejercicio-02-01.php");
  }

  $centro = $_POST["centros"][0];

  $conexion = new mysqli ('localhost', 'root', '', 'dwes_dic2020');

  if ($conexion->connect_errno != null) {
    print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
    exit();
  }   

  $resultado = $conexion->query("select * from departamentos where centro = $centro");
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
  <h1>Listado de Departamentos</h1>

  <div>
    <?php
    print("<table style=\"border: 1px black solid; text-align: center\">");
    print("<thead>");
      print("<td> Nombre </td> <td> Presupuesto </td> <td> Personal </td>");
    print("</thead>");
      while ($row = $resultado->fetch_array()){
        print("<tr>");
        print("<td>$row[1]</td>");
        print("<td>$row[2]</td>");
        $resultado2 = $conexion->query("select count(id) from empleados where departamento = $row[0]");
        $numEmp = $resultado2->fetch_array();
        print("<td><a href=\"ejercicio-02-03.php?id=$row[0]\"> $numEmp[0] </a></td>");
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
