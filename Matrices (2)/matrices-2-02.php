<?php
/**
 * matrices-2-02.php
 *
 * @author Escriba aquí su nombre
 *
 * Escriba un programa:
 *    ● que muestre primero un grupo de entre 5 y 15 bolas numeradas 
 *    del 1 al 10 al azar(rango unicode: 10102 a 10111). > &#10110
 *    ● que muestre de nuevo el grupo inicial, pero habiendo 
 *    eliminado del grupo los valoresrepetidos
 *    Utilice la función array_unique() para obtener los valores sin repetir
 */
function tirarDado($numMax){
  return rand(1,$numMax);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina valores repetidos.
    Matrices (2)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <p>Elimina valores repetidos</p>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>
<?php

$numBolas = tirarDado(11)+4;
$bolas = [];
for ($i = 0; $i < $numBolas ;$i++){
  array_push($bolas, tirarDado(10));
}
print("<br>Mis bolas <br>");

print("<p style=\"font-size:48px;\" >");
foreach($bolas as $i){
  $codigo = 10101+$i;
  print("&#".$codigo." ");
}
print("</p>");

$bolasUnicas =  array_unique($bolas);
sort($bolasUnicas);
print("<br>Mis bolas sin repetidos<br>");

print("<p style=\"font-size:48px;\" >");
foreach($bolasUnicas as $i){
  $codigo = 10101+$i;
  print("&#".$codigo." ");
}
print("</p>");

?>

  <footer>
    <p>Realizado por Sr. Florido</p>
  </footer>
</body>
</html>
