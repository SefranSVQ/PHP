<?php

$cont = 0;
foreach ($_REQUEST as $i){
    if($i != $_REQUEST['nombre'] && $i != ""){
        $cont++;
    }
}

print("Hola ".$_REQUEST['nombre']);
print("<br>En la actualidad practicas una cantidad de $cont deporte(s) ");

?>
