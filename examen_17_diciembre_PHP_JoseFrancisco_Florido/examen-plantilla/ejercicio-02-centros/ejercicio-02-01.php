<?php

  session_name("ejercicio2");
  session_start();

  if(!isset($_SESSION["mensaje1"])){
    $_SESSION["mensaje1"] = "";
  }

  if(!isset($_SESSION["accion"])){
    $_SESSION["accion"] = "inicio";
  }

  if ($_SESSION["accion"] == "inicio"){
    $_SESSION["mensaje1"] = "";
  }


  $conexion = new mysqli ('localhost', 'root', '', 'dwes_dic2020');

  if ($conexion->connect_errno != null) {
    print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
    exit();
  }   

  $resultado = $conexion->query("select * from centros");

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
  <h1>Centros</h1>

  <div>
    <form action="ejercicio-02-02.php" method="post">
    <p>Por favor, seleccione un centro: </p>
    <select name="centros">
      <option value="-1"> -- Centros --</option>
        <?php 
            while ($row = $resultado->fetch_array()){
                print("<option value=\"$row[0]\"> $row[1]</option>");
            }
            $conexion->close();
        ?>
    </select>
    <p><input type="submit" value="Consultar"/></p>
    <?php
      print($_SESSION["mensaje1"]);
    ?>
    </form>
  </div>
</body>
</html>
