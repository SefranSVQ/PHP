<?php
session_start();

$tamanio = 0;

if (!isset($_POST["tamanio"]) || $_POST["tamanio"]== ""
  || $_POST["tamanio"] < 1 || $_POST["tamanio"] > 15){
  header("location:ejercicio-04-01.html");
} else $tamanio= $_POST["tamanio"];

$tamanioTotal = $tamanio**2;
$_SESSION["tamanioTotal"] = $tamanioTotal;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tabla cuadrada con casillas de verificación
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Tabla cuadrada con casillas de verificación</h1>
  <h3>Marque las casillas de verificación que quiera y contaré cuántas ha marcado.</h3>
  <form action="ejercicio-04-03.php" method="post">

	<!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->

  <table border=1>
  <?php 

    for ($i = 0; $i < $tamanio ; $i++){
      print("<tr>");
      for ($j = 1; $j <= $tamanio ; $j++){
        $valor = $i*$tamanio+$j;
        print("<td> <input type=\"checkbox\" name=\"marcados[]\" value=\"$valor\"> $valor </td>");

      }
      print("</tr>");
    }
  
  ?>
  </table>
  <p>
    <input type="submit" value="Contar" />
  </p>
  </form>
</body>
</html>