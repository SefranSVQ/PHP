<?php

$cantMin =$_REQUEST['cantMin'];
$cantMax =$_REQUEST['cantMax'];
$valorMin =$_REQUEST['valorMin'];
$valorMax =$_REQUEST['valorMax'];
$cantAle;
$valorAle;

if (ctype_digit($cantMin) && ctype_digit($cantMax) && ctype_digit($valorMin) && ctype_digit($valorMax)
    && $cantMin < $cantMax  && $valorMin < $valorMax){
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

?>
