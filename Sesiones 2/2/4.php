<?php
    session_start();
    $enunciados = $_SESSION["enunciados"];
    $valoraciones = $_SESSION["valoraciones"];
    for ($i = 0; $i < count($enunciados); $i++){
        print("<p>A la pregunta - ".$enunciados[$i]." - se ha contestado con una valoración de: ".$valoraciones[$i]."</p>");
    }

    print("<p>- THE END -</p>");
?>