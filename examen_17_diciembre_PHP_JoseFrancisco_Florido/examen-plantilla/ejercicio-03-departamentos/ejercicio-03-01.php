<?php

  $conexion = new PDO('mysql:host=localhost;dbname=dwes_dic2020', 'root','');

  if (!isset($_GET["order"])){
    $resultado = $conexion->query('select * FROM departamentos order by centro, nombre');
  }
  else {
    $orden = $_GET["order"];
    $resultado = $conexion->query("select * FROM departamentos order by $orden");
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Empresa - Departamentos
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Listado de Departamentos</h1>

  <div>
    
  <?php
      print("<table style=\"border: 1px black solid; text-align: center\">");
      print("<thead>");
      print("<td> <a href=\"ejercicio-03-01.php?order=nombre\"> Departamento </a> </td> 
        <td> <a href=\"ejercicio-03-01.php?order=presupuesto\"> Presupuesto </a>  </td> 
        <td> <a href=\"ejercicio-03-01.php?order=centro\"> Centro </a>  </td>");
      print("</thead>");
      while ($registro = $resultado->fetch()){
        print("<tr>");
        print("<td> <a href=\"ejercicio-03-02.php?dept=$registro[1]\"> $registro[1] </a></td>");
        print("<td>$registro[2]</td>");
        print("<td>$registro[3]</td>");
        print("</tr>");
      }
      print("</table>");

    ?>

  </div>
</body>
</html>
