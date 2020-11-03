<?php
/**
 * matrices-3-03.php
 *
 * @author J. F. Florido
 * 
 *    Escriba un programa que muestre una tirada de un número de dados al azar 
 *    entre 2 y 7 ylos ordene de menor a mayor.
 *
 */



$numTiradas = rand(2,7);
$tiradas = [];
$tiradasOrdenadas = [];

for ($i = 0; $i < $numTiradas ;$i++){
  array_push($tiradas, rand(1,6));
}

$tiradasOrdenadas = $tiradas;
sort($tiradasOrdenadas);


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ordenar dados.
    Matrices (3). Sin formularios.
    J.F. Florido
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Ordenar dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

print ("<br>Numero de tiradas: $numTiradas");
print ("<br>Resultado de las tiradas: <br>");
foreach ($tiradas as $tirada){
  print ("<img src=\"img\/$tirada.svg\" width=100 height=100>");
}

print ("<br>Tiradas ordenadas: <br>");
foreach ($tiradasOrdenadas as $tirada){
  print ("<img src=\"img\/$tirada.svg\" width=100 height=100>");
}

?>

  <footer>
    <p>J.F. Florido</p>
  </footer>
</body>
</html>
