<?php

$columnas = $_REQUEST["columnas"];
$celdas = $_REQUEST["celdas"];

if (!isset($columnas) || !ctype_digit($columnas) || $columnas < 1 || $columnas > 100) {
    print("Entrada de datos incorrecta.");
}
else {
    $filas = $celdas/$columnas;
    if (is_float($filas)) $filas = intval($filas)+1;
    print("Número de filas: $filas <br>");
    print("Número de celdas numeradas: $celdas <br>");
    $num=0;
    print "<table> <tbody>\n";
    for ($i = 0; $i < $filas ; $i++){
        print "<tr>\n";
        for ($j = 1; $j <= $columnas && $num < $celdas; $j++) {
            $num = $i*$columnas+$j;
            print "<td style=\"border: 1px solid black \">$num</td>\n";
        }
        print"</tr>\n";
    }
    print "</tbody></table>\n";
}
?>