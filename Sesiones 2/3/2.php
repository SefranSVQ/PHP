<?php

// Funciones

function meterMoneda(){
    $_SESSION["monedas"] += 1;
}

function realizarTirada(){
    $baseSimbolos = 127817;  
    for ($i = 0; $i < 3 ; $i++){
        $_SESSION["frutas"][$i] = (rand(0, 10)+$baseSimbolos);
    }
}
/*
● Si sale una fresa, se gana una moneda.
● Si salen dos fresas, se ganan cuatro monedas.
● Si salen tres fresas, se ganan diez monedas.
● Si salen dos frutas iguales que no sean fresas, se ganan dos monedas.
● Si salen tres frutas iguales que no sean fresas, se ganan cinco monedas.
● Si sale una fresa y dos frutas iguales, se ganan tres monedas.
● En el resto de casos, se pierde una moneda.
*/

function calcularPremio(){
    $contFresas = 0;
    $_SESSION["premio"] = 0;

    // premios de fresas
    foreach($_SESSION["frutas"] as $fruta){
        if ($fruta == 127827) $contFresas++;
    }

    switch($contFresas){
        case 1: $_SESSION["premio"] += 1; break;
        case 2: $_SESSION["premio"] += 4; break;
        case 3: $_SESSION["premio"] += 10; break;
    }

    // premios de otras frutas
    for($i = 0; $i < count($_SESSION["frutas"]) ;$i++){
        for($j = $i+1; $j < count($_SESSION["frutas"]) ;$j++){
            print($_SESSION["frutas"][$i]." - ".$_SESSION["frutas"][$j].", ");
            if ($_SESSION["frutas"][$i] == $_SESSION["frutas"][$j] // Si son iguales y no son fresas ->
            && $_SESSION["frutas"][$i] != 127827) {
                 $_SESSION["premio"] += 2;
            }
        }
    }

    // En el caso de que las 3 hayan sido iguales, 
    // en el paso anterior se le habrían añadido 6 premios, por ende, debemos restar 1 al total.
    if ( $_SESSION["frutas"][0] == $_SESSION["frutas"][1] && 
    $_SESSION["frutas"][1] == $_SESSION["frutas"][2]) $_SESSION["premio"] -= 1;

    // añadir premio a las monedas.
    $_SESSION["monedas"] += $_SESSION["premio"];
}

// programa

session_name("juegofrutas");
session_start();
print_r($_POST);

if (isset($_POST["insertarMoneda"])){
    meterMoneda();
    header("Location:index.php");
}
if (isset($_POST["tirar"])){
    $_SESSION["monedas"] -= 1;
    realizarTirada();
    calcularPremio();
    header("Location:index.php");
}


?>