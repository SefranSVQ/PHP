<?php
/**
 * matrices-3-02.php
 *
 * @author J.F. Florido Flores
 *
 * Escriba un programa:
 *    ● que muestre primero un grupo de entre 7 y 20 corazones al azar 
 *    (rango unicode:128147 a 128152).
 *    ● que indique cuántas veces ha aparecido cada corazón.
 * 
 */

function generarCorazon(){
  return rand(128147,128152);
}

$base = 128147;
$numCorazones = rand(7,20);
$corazones = array();
$totalCorazones = [0,0,0,0,0,0];

for ($i = 0; $i < $numCorazones ; $i++){
  $corazones[$i]=generarCorazon();
}

foreach ($corazones as $i){
  $totalCorazones[$i-128147]++;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuenta corazones.
    Matrices (3)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Cuenta corazones</h1>

  <p>Actualice la página para mostrar un nuevo grupo de corazones.</p>

<?php

foreach($corazones as $i){
  print("&#".$i);
}

print("<p> Conteo: </p>");
foreach($totalCorazones as $i => $valor){
  print("<p> &#".($base+$i)." => $valor </p>");
}

?>

  <footer>
    <p> J.F. Florido Flores </p>
  </footer>
</body>
</html>
