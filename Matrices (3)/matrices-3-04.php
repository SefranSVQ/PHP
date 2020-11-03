<?php
/**
 * matrices-3-04.php
 *
 * @author J.F. Florido
 * 
 *    Escriba un programa:
 *    ● que muestre una mano de entre 5 y 10 cartas del 1 al 5 al azar 
 *    (rango unicode:127169 a 127173).
 *    ● que muestre las cartas que han salido, sin repetir y ordenándolas de menor a mayor.
 *    ● que muestre cuántas cartas han salido de cada (sin ordenar).
 *    ● que muestre cuántas cartas han salido de cada, ordenándolas de mayor a menor
 *    número de cartas obtenido.
 *
 */

 $numCartas = rand(5,10);
 $cartas = [];
 $cartasUnicas;
 $totalCartas = ["127169"=>0,"127170"=>0,"127171"=>0,"127172"=>0,"127173"=>0];
 $totalCartasOrd;

// Generar Cartas
for ($i = 0; $i < $numCartas ;$i++){
  array_push($cartas, rand(1,5)+127168);
}

// Cartas sin repetir y ordenadas
$cartasUnicas = array_unique($cartas);
sort($cartasUnicas);

// Conteo de cartas
foreach ($cartas as $i){
  $totalCartas[$i]++;
}

// Conteo de cartas ordenadas
$totalCartasOrd = $totalCartas;
asort($totalCartasOrd);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ordenar cartas.
    Matrices (3)
    J.F. Florido
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Ordenar cartas</h1>

  <p>Actualice la página para mostrar una nueva mano.</p>

<?php

print("Mano de $numCartas cartas: <p style=\"font-size:300%; margin: 10px;\"> ");
foreach($cartas as $i){
  print("&#".$i." ");
}
print("</p>");

print("Cartas Únicas: <p style=\"font-size:300%; margin: 10px;\">");
foreach($cartasUnicas as $i){
  print("&#".$i." ");
}
print("</p>");

print("Cantidad de cartas: <p style=\"font-size:300%; margin: 10px;\"> ");
foreach($totalCartas as $i => $valor){
  print("&#".($i)." => $valor ");
}
print("</p>");

print("Cantidad de cartas ordenadas: <p style=\"font-size:300%; margin: 10px;\"> ");
foreach($totalCartasOrd as $i => $valor){
  print("&#".($i)." => $valor ");
}
print("</p>");

?>

  <footer>
    <p>J.F. Florido</p>
  </footer>
</body>
</html>
