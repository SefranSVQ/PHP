<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuenta cartas
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Cuenta cartas</h1>

<?php

include "../funciones.php";

if (!isset($_POST["paridad"]) && !isset($_POST["palo"])){
  print("Por favor, necesitamos que acceda desde la primera página web para proceder. </br>");
}
else {
  if (!isset($_POST["paridad"])) $paridad=null;
  else $paridad = $_POST["paridad"];

  $numCartas = $_POST["numCartas"];
  $palo = $_POST["palo"];
  $numCartasOK = true;
  $paridadOK = true;
  $paloOK = true;
  $basePicas = 127137;
  $baseCorazones = 127153;
  $baseDiamantes = 127169;
  $baseTreboles = 127185;
  $baseSel = 0;
  $cartas=[];
  $cartasParidad=[];
  $cartasUnicas=[];
  $valorParidad = 1;
  $cont = 0;

  // Validación de entradas:
  if (!ctype_digit($numCartas)){
    print("el numero de cartas no es un número. </br>");
    $numCartasOK = false;
  } else if ($numCartas < 5 || $numCartas > 20){
    print("el valor del número de cartas no está en el rango válido (5 - 20). </br>");
    $numCartasOK = false;
  } else {
    print("Numero de cartas: $numCartas  </br>");
  }

  if (!isset($paridad)){
    print("Paridad no seleccionada </br>");
    $paridadOK = false;
  }

  if ($palo == "-1"){
    print("palo no seleccionado </br>");
  }

  // Si todo está correcto, procedemos a realizar el programa.

  if($paloOK && $paridadOK && $numCartasOK){

    switch($palo){
        case "picas": $baseSel=$basePicas; break;
        case "corazones": $baseSel=$baseCorazones; break;
        case "diamantes": $baseSel=$baseDiamantes; break;
        case "treboles": $baseSel=$baseTreboles; break;
      }

      // generamos los valores aleatorios
      print("<span style=\"font-size:7em\">");
      for ($i = 0 ; $i < $numCartas; $i++){
        $cartas[] = generarAleatorio($baseSel, $baseSel+10);
        print("&#$cartas[$i] ");
      }
      print("</span>");

      // Seleccionamos los valores que coincidan con la paridad
      // par 0, impar 1
      if ($paridad == "par") $valorParidad = 0;

    
      for($i = 0; $i < $numCartas ;$i++ ){
        if ($cartas[$i]%2 == $valorParidad){
          $cartasParidad[] = $cartas[$i];
        } 
      }
      
      sort($cartasParidad);
      print("</br> Hay ".count($cartasParidad)." que son $paridad: </br><span style=\"font-size:7em\">");
      for ($i = 0 ; $i < count($cartasParidad); $i++){
        print("&#$cartasParidad[$i] ");
      }
      print("</span>");

      // Seleccionamos los valores únicos
      $cartasUnicas = array_unique($cartasParidad);
      print("</br> Cartas no repetidas: </br><span style=\"font-size:7em\">");
      for ($i = 0 ; $i <= $numCartas; $i++){
        if(isset($cartasUnicas[$i])) print("&#$cartasUnicas[$i] ");
      }
      print("</span>");
  }
  else {
    print("Por favor, introduzca todos los datos.");
  }
  
}
  




?>

</body>
</html>