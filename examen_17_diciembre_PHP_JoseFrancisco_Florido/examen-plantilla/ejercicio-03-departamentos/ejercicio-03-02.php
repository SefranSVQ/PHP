<?php

  $conexion = new PDO('mysql:host=localhost;dbname=dwes_dic2020', 'root','');
  if (isset($_GET["dept"])){
    $dept = $_GET["dept"];
  }
  else {
    header("Location: ejercicio-03-01.php");
  }
  

  $resultado = $conexion->query("select * FROM departamentos where nombre='$dept'");
  $registro = $resultado->fetch();

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
  <h1>Editar Departamento</h1>

  <div>
    <form action="ejercicio-03-03.php" method="post">

    <?php
     // id nombre presupuesto centro
      print("ID: <input type=\"text\" name=\"id\" value=\"$registro[0]\" readonly> <br><br>");
      print("Nombre: <input type=\"text\" name=\"nombre\" value=\"$registro[1]\"> <br><br>");
      print("Presupuesto: <input type=\"text\" name=\"presupuesto\" value=\"$registro[2]\"> <br><br>");
      print("Centro: <input type=\"text\" name=\"centro\" value=\"$registro[3]\"> <br><br>");
      print("<input type=\"submit\" value=\"Actualizar\">");
    ?>

    </form>
    <p>
      <a href="ejercicio-03-01.php">Volver</a>
    </p>
  </div>
</body>
</html>
