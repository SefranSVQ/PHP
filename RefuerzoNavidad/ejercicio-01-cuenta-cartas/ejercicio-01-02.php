<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Agrupa cartas repetidas 
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php

    $valoresCorrectos = true;
    $numCartas;
    $palo;
    $valorBase;
    $cartas = [];

    if (!isset($_POST["numCartas"]) || !ctype_digit($_POST["numCartas"]) 
      || $_POST["numCartas"] < 10 || $_POST["numCartas"] > 30){
        print("El numero de cartas no contiene un valor válido.");
        $valoresCorrectos = false;
    } else {
      $numCartas = $_POST["numCartas"];
    }

    if ($_POST["palo"] == "-1" ){
        print("No se ha introducido ningún palo.");
        $valoresCorrectos = false;
    } else {
      $palo = $_POST["palo"];
      switch ($palo){
        case "picas":
          $valorBase = 127136;
        break;
        case "corazones":
          $valorBase = 127152;
        break;
        case "diamantes":
          $valorBase = 127168;
        break;
        case "treboles":
          $valorBase = 127184;
        break;
      }
    }

    if ($valoresCorrectos){
      for ($i = 0; $i < 10 ; $i++){
        $cartas[$i] = rand(1,10)+$valorBase;
      }
	?>
</head>

<body>
  <h1>Agrupa cartas repetidas</h1>
  <div>
  <?php
  
      print("Hemos elegido mostrar $numCartas cartas del palo $palo <br> <span style=\"font-size:7em\">");

      foreach($cartas as $carta){
        print("&#$carta ");
      }

      print("</span>");

      $recuentoCartas = array_count_values($cartas);

      print("<br> Cantidad de cada carta: <br>");

      print("<br> <span style=\"font-size:4em\">");

      while ($totalCartas = current($recuentoCartas)) {
        print("&#".key($recuentoCartas)." -> $totalCartas ");
        next($recuentoCartas);
      }

      print("</span>");
      
    }
	?>
	<p>
      <a href="ejercicio-01-01.html">Volver</a>
    </p>
  </div>
</body>
</html>