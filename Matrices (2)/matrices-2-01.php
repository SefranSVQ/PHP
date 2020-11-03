<?php
/**
 * matrices-2-01.php
 *
 * @author J.F. Florido
 * 
 *    Escriba un programa:
 *      ●que muestre primero una tirada de un número de dados al azar entre 1 y 10
 *      ●que muestre a continuación un dado al azar.
 *      ●que muestre de nuevo la tirada inicial, pero habiendo eliminado de la tirada 
 *        losdados que coincidan con el dado suelto (si hay alguno)
 *
 */

function tirarDado($numMax){
  return rand(1,$numMax);
}

$numTiradas = tirarDado(10);
$numSeleccionado = tirarDado(6);
$tiradas = [];
$tiradasFinales = [];

for ($i = 0; $i < $numTiradas ;$i++){
  array_push($tiradas, tirarDado(6));
}

foreach($tiradas as $i => $tirada){
  if ($tiradas[$i] != $numSeleccionado) array_push($tiradasFinales, $tiradas[$i]);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina un valor.
    Matrices (2)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Elimina un valor</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

print ("<br>Numero de tiradas: $numTiradas");
print ("<br>Resultado de las tiradas: <br>");
foreach ($tiradas as $tirada){
  print ("<img src=\"img\/$tirada.svg\" width=150 height=150>");
}

print ("<br> Numero seleccionado para eliminar: <br>");
print ("<img src=\"img\/$numSeleccionado.svg\" width=150 height=150>");
print ("<br>Tiradas que no coinciden con el número seleccionado: <br>");
foreach ($tiradasFinales as $tirada){
  print ("<img src=\"img\/$tirada.svg\" width=150 height=150>");
}

?>
  <footer>
    <p>J.F. Florido</p>
  </footer>
</body>
</html>
