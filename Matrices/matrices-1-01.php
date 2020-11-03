<?php
/**
 *    matrices-1-01.php
 *
 *    @author J. F. Florido
 * 
 *    Escriba un programa que muestre una tirada de 
 *    dado al azar y escriba en letras el valor obtenido.
 *
 */

 function tirarDado(){
    return rand(1,6);
 }

 $numero = tirarDado();
 $stringNum = ["","uno","dos","tres","cuatro","cinco","seis"];
 $cara = $stringNum[$numero];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado.
    Matrices (1).
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

print ("<img src=\"img/$numero.svg\">");
print ("<br>Has sacado un ".$cara);

?>

  <footer>
    <p>J. F. Florido</p>
  </footer>
</body>
</html>
