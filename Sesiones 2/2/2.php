<?php
    session_start();
    if (isset($_REQUEST["enunciados"])){
        $valido = true;
        foreach ($_REQUEST["enunciados"] as $enunciado){
            if ($enunciado == ""){
                $valido=false;
            }
        }
        if ($valido){
            $_SESSION["enunciados"] = $_REQUEST["enunciados"];
            header("Location:3.php");
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
            <p>Escribe el enunciado de cada una de las preguntas: </p>
            <?php 
                for($i = 1; $i <= $_SESSION["preguntas"] ; $i++){
                    print("<p>Pregunta $i: <input type=\"text\" name=\"enunciados[]\"> </p>");
                }
            ?>
            <p><input type="submit" value="Mostrar" name="boton"/></p>
        </form>
    </body>

</html>