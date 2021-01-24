<?php

$e = $_REQUEST;
$nombre = $e["nombre"];
$estatura = $e["estatura"];

if (isset($nombre) && isset($estatura) && is_int($estatura) && $estatura >= 70 && $estatura <= 250){ 
    $metros = intval($estatura/100);
    $centimetros = $estatura%100;
    
    print("Hola $nombre. <br><br>Mides ");
    if ($metros > 0){
        print("$metros m y ");
    }
    print("$centimetros cm");
}
else { // algo mal, reenviar a 1.
    $mensaje = "Algo ha ido mal: <br>";
    if ($nombre == "") $mensaje = $mensaje."Debe introducir un nombre.<br>";
    if (!isset($estatura) || !is_int($estatura)) $mensaje = $mensaje."Debe introducir una estatura válida.<br>";
    header("Location:4.php?mensaje=$mensaje");
}

?>