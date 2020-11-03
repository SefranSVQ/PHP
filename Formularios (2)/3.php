<?php

$entrada = $_REQUEST['anio'];

if (is_numeric($entrada)){
    $entrada += +0;
    if (is_int($entrada) && $entrada >= 0 && $entrada < 10000){
        if ($entrada%4 == 0 && $entrada%100 != 0 || $entrada%400 == 0 ){
            print("El año $entrada es bisiesto");
        }
        else print("El año $entrada no es bisiesto");
    }
    else print("Error de entrada de datos. Por favor, inserte un número entero válido.");
}
else print("Error de entrada de datos. Por favor, inserte un número entero válido.");

?>
