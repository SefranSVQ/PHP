<?php
/**
 *    matrices-1-02.php
 *
 *    @author J. F. Florido
 * 
 *    Escriba un programa que muestre un animal al azar.
 *
 */

function tirarDado($numMax){
  return rand(0,$numMax);
}
$animales = ["Ballena","Caballito-mar","Camello","cebra","elefante","hipopotamo","jirafa","leon"
          ,"leopardo","medusa","mono","oso","oso-blanco","pajaro","pinguino","rinoceronte","serpiente"
          ,"tigre","tortuga","tortuga-marina"];
$posicion = tirarDado(count($animales)-1);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Animales.
    Matrices (1)
    J.F. Florido
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

print ("<img src=\"img\animales/$animales[$posicion].svg\">");
?>

  <footer>
    <p>J.F. Florido</p>
  </footer>
</body>
</html>
