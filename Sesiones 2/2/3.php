<?php
    session_start();
    if (isset($_REQUEST["valoraciones"])){
        $valido = true;
        foreach ($_REQUEST["valoraciones"] as $valoracion){
            if ($valoracion == ""){
                $valido=false;
            }
        }
        if ($valido){
            $_SESSION["valoraciones"] = $_REQUEST["valoraciones"];
            header("Location:4.php");
        }
    }
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio 2</title>
    </head>

    <body>
        <form action="" method="post">
            <?php 
                //$_SESSION["valoraciones"][$i];
                for($i = 1; $i <= $_SESSION["preguntas"]; $i++){
                    print("<p>Pregunta $i: ".$_SESSION["enunciados"][$i-1]."</p>");
                    print("<p>");
                    for ($j = 1 ; $j <= $_SESSION["respuestas"]; $j++){
                        print(" $j <input type=\"radio\" name=\"valoraciones[".($i-1)."]\" value=\"$j\"/>");
                    }
                    print("</p>");
                }
                
            ?>
            <p><input type="submit" value="Finalizar Encuesta"/></p>
        </form>
    </body>

</html>