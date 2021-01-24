<?php
    session_start();
    $_SESSION["num"];
    switch($_REQUEST["modificar"]){
        case 'Subir': $_SESSION["num"] = $_SESSION["num"]+1; break;
        case 'Bajar': if($_SESSION["num"] != 0) $_SESSION["num"] = $_SESSION["num"]-1; break;
        case 'Poner a cero': $_SESSION["num"]=0; break;
    }

    header("Location:index.php");

?>