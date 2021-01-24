<?php

include "../funciones.php";

session_name("dados");
session_start();
if (!isset($_SESSION["max"])) $_SESSION["max"] = 0;

if (!isset($_SESSION["dados"]) || $_SESSION["max"] == 0){
  for($i = 0 ; $i < 5 ;$i++){
    $_SESSION["dados"][$i] = 1;
  }
  $_SESSION["max"] = 5;
  $_SESSION["puntuacion"]=5;
}
else {
  $_SESSION["puntuacion"] = 0;
  for($i = 0 ; $i < 5 ;$i++){
    $_SESSION["dados"][$i] = generarAleatorio(1,6);
    $_SESSION["puntuacion"] += $_SESSION["dados"][$i];
  }
  if ($_SESSION["puntuacion"] > $_SESSION["max"]) $_SESSION["max"] = $_SESSION["puntuacion"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Récord de dados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Récord de dados</h1>

  <?php
    for($i = 0 ; $i < 5 ;$i++){
      $valor = $_SESSION["dados"][$i];
      print("<img src=\"img\/$valor.svg\" width=100 height=100>");
    }

    print("<p>Puntuacion máxima: ".$_SESSION["max"]." </p>");
  ?>
<form action="ejercicio-02-02.php" method="post">

<p><input type="submit" value="Sacar de nuevo Dados" name="tirar" /> <input type="submit" value=" Empezar de nuevo" name="empezar" /> </p>

</form>
</body>
</html>