<?php

$cantMin =$_REQUEST['cantMin'];
$cantMax =$_REQUEST['cantMax'];
$valorMin =$_REQUEST['valorMin'];
$valorMax =$_REQUEST['valorMax'];
$cantAle;
$valorAle;

if (is_numeric($cantMin) && is_numeric($cantMax) && is_numeric($valorMin) && is_numeric($valorMax)){
    $cantMin += 0;
    $cantMax += 0;
    $valorMin += 0;
    $valorMax += 0;
    if (is_int($cantMin) && is_int($cantMax) && is_int($valorMin) && is_int($valorMax) 
        && $cantMin < $cantMax 
        && $valorMin < $valorMax){
        $cantAle = rand($cantMin,$cantMax);
        print("Matriz de $cantAle producidos entre $valorMin y $valorMax <br>");
        print("------------------------------------------------------- <br>");
        print("<table style=\"border: 1px solid black\">");
        for($i = 0; $i < $cantAle ; $i++){
            print("<tr>");
            for($j = 0; $j < $cantAle ; $j++){
                $valorAle = rand($valorMin,$valorMax);
                print("<th> $valorAle </th>");
            }
            print("</tr>");
        }
        print("</table>");
    }
    else print("Error de entrada de datos. Por favor, inserte valores válidos.");
}
else print("Error de entrada de datos. Por favor, inserte valores válidos.");

?>
