<?php

  session_name("juegodados");
  session_start();

  $dadosA = [];
  $dadosB = [];
  $puntuacionA = 0;
  $puntuacionB = 0;

  if (!isset($_SESSION["winA"]) && !isset($_SESSION["winB"]) && !isset($_SESSION["draw"])){
    $_SESSION["winA"] = 0;
    $_SESSION["winB"] = 0;
    $_SESSION["draw"] = 0;
  }

  $winA = $_SESSION["winA"];
  $winB = $_SESSION["winB"];
  $draw = $_SESSION["draw"];

  for($i = 0; $i < 6 ;$i++){
    $dadosA[$i] = rand (1,6);
    $dadosB[$i] = rand (1,6);
  }

  $puntuacionA = array_sum($dadosA) - (max($dadosA) + min($dadosA));
  $puntuacionB = array_sum($dadosB) - (max($dadosB) + min($dadosB));

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Seis dados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Seis dados</h1>
    
    <?php 

      print("<p><b>Tiradas del jugador 1: </b></p>");
      for($i = 0 ; $i < 6 ;$i++){
        $valor = $dadosA[$i];
        print("<img src=\"img\/$valor.svg\" width=100 height=100>");
      }

      print("<p><b>Tiradas del jugador 2: </b></p>");
      for($i = 0 ; $i < 6 ;$i++){
        $valor = $dadosB[$i];
        print("<img src=\"img\/$valor.svg\" width=100 height=100>");
      }

      print("<p><b>Puntuaciones: </b></p>");
      print("<p>Puntuacion del jugador 1: $puntuacionA </p>");
      print("<p>Puntuacion del jugador 2: $puntuacionB </p>");

      if ($puntuacionA > $puntuacionB){
        print("<p><b>Gana el jugador 1</b></p>");
        $_SESSION["winA"] += 1;
      } else if ($puntuacionA < $puntuacionB) {
        print("<p><b>Gana el jugador 2</b></p>");
        $_SESSION["winB"] += 1;
      } else {
        print("<p><b>Empate</b></p>");
        $_SESSION["draw"] += 1;
      }

      print("<p><b>Resumen: </b></p>");
      print("<p>El jugador 1 ha ganado un total de $winA veces </p>");
      print("<p>El jugador 2 ha ganado un total de $winB veces </p>");
      print("<p>Se ha empatado un total de $draw veces </p>");
    ?>

</body>
</html>