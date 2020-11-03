<?php
/**
 * matrices-3-01.php
 *
 * @author J. F. Florido
 * 
 * Escriba un programa:
 *    ● que muestre primero un grupo de entre 10 y 20 emoticonos al azar 
 *    (rango unicode:128512 a 128580).
 *    ● que indique si un emoticono al azar (del mismo rango unicode) 
 *    está en el grupo ono.
 *
 */

function aleatorio($numMax){
  return rand(1,$numMax);
}

$numEmoticonos = aleatorio(11)+9;
$emoticonos = array();
$emoticonoSeleccionado = aleatorio(69);
$estaDentro = false;
$base = 128511;

for ($i = 0; $i < $numEmoticonos ;$i++){
  array_push($emoticonos, aleatorio(69));
}

foreach ($emoticonos as $i){
  if ($i == $emoticonoSeleccionado) $estaDentro = true;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Busca emoticono.
    Matrices (3)
    J.F. Florido Flores.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Busca emoticono</h1>

  <p>Actualice la página para mostrar un nuevo grupo de emoticonos.</p>

<?php

foreach ($emoticonos as $i){
  $codigo = $base+$i;
  print("&#".$codigo." ");
}

$codigo = $base+$emoticonoSeleccionado;
if ($estaDentro) print("<br><br>El emoticono &#".$codigo." está dentro");
else print("<br><br>El emoticono &#".$codigo." no está dentro");

?>

  <footer>
    <p>J.F. Florido Flores.</p>
  </footer>
</body>
</html>
