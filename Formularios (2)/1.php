<?php

$entrada = $_REQUEST['segundos'];
$min = 0;
$sec = 0;

if (is_numeric($entrada)){
    $entrada += +0;
    if (is_int($entrada) && $entrada > 0){
        $min = intdiv($entrada,60);
        $sec = $entrada%60;
        print ("$min minuto(s) y $sec segundo(s)");
    }
    else print("Error de entrada de datos. Por favor, inserte un número entero.");
}
else print("Error de entrada de datos. Por favor, inserte un número entero.");

?>
