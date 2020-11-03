<?php
/**
 *    matrices-1-03.php
 *
 *    @author J.F. Florido
 * 
 *    Escriba un programa que muestre un animal al azar y su nombre.
 *
 */

function tirarDado($numMax){
  return rand(0,$numMax);
}
$animales = ["Ballena","Caballito-mar","Camello","Cebra","elefante","hipopotamo","jirafa","leon"
          ,"leopardo","medusa","mono","oso","oso-blanco","pajaro","pinguino","rinoceronte","serpiente"
          ,"tigre","tortuga","tortuga-marina"];
$posicion = tirarDado(count($animales)-1);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Nombres de animales.
    Matrices (1)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
print "<h1>$animales[$posicion]</h1>";
print ("<img src=\"img\animales/$animales[$posicion].svg\" alt=150 width=150 height=150>");
?>

  <footer>
    <p>J.F. Florido</p>
  </footer>
</body>
</html>

