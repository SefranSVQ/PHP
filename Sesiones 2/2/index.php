<?php
    if (isset($_REQUEST["preguntas"]) && isset($_REQUEST["respuestas"])
        && $_REQUEST["preguntas"] >= 1 && $_REQUEST["preguntas"] <= 10
        && $_REQUEST["respuestas"] >= 2 && $_REQUEST["respuestas"] <= 10
    ){
        session_start();
        $_SESSION["preguntas"] = $_REQUEST["preguntas"];
        $_SESSION["respuestas"] = $_REQUEST["respuestas"];
        header("Location:2.php");
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
            <p>Escribe el número de preguntas (1-10) y el número de respuestas (2-10) que tendrá la encuesta. </p>
            <p>Numero de preguntas: <input type="number" name="preguntas" min="1" max="10"> </p>
            <p>Numero de respuestas: <input type="number" name="respuestas" min="2" max="10"> </p>
            <p><input type="submit" value="Mostrar" name="boton"/></p>
           </form>
    </body>

</html>