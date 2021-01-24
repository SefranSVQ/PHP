<?php

session_start();


if (!isset($_SESSION["tamanioTotal"])){
  header("location:ejercicio-04-01.html");
}
else {

$tamanio = $_SESSION["tamanioTotal"]

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
  <?php

  if(isset($_POST["marcados"])){
    $valor = count($_POST["marcados"]);
      print ("Ha seleccionado una cantidad de $valor casilla(s) en una tabla con $tamanio valores </br></br>");

      if ($valor > 0){
        print("Las casillas seleccionadas han sido: </br>");

        foreach($_REQUEST["marcados"] as $a){
          print($a." ");
        }
      }
  } else {
    $valor = 0;
    print ("Ha seleccionado una cantidad de $valor casilla(s) en una tabla con $tamanio valores </br></br>");
  }
}
  ?>
  </form>
</body>
</html>