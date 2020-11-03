<?php

$entrada = $_REQUEST['tamanio'];

if (is_numeric($entrada)){
    $entrada += +0;
    if (is_int($entrada) && $entrada > 0 && $entrada <= 100){
        print("<table style=\"border: 1px solid black\">");
        for($i = 0; $i <= $entrada ; $i++){
            print("<tr>");
            for($j = 0; $j <= $entrada ; $j++){
                if ($i == 0) print("<th style=\"border: 1px solid black\"> $j </th>");
                else if ($j == 0) print("<th style=\"border: 1px solid black\"> $i </th>");
                else print("<td style=\"border: 1px solid black; text-align: center; padding: 0.3em\"> ".$i*$j."</th>");
                
            }
            print("</tr>");
        }
        print("</table>");
    }
    else print("Error de entrada de datos. Por favor, inserte un número entero entre 1 y 100.");
}
else print("Error de entrada de datos. Por favor, inserte un número entero entre 1 y 100.");

?>
