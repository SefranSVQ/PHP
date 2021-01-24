<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio 4</title>
    </head>

    <body>
        <?php 
            if(isset($_REQUEST["mensaje"])) print($_REQUEST["mensaje"]);
        ?>
        <form action="4b.php" method="post">
            <p>Deme su nombre y estatura (en cm), hágalo por la ciencia.</p>
            <p>Nombre: <input type="text" name="nombre"> </p>
            <p>Estatura: <input type="text" name="estatura"> </p>
            <p><input type="submit" value="Enviar" name="boton"/></p>
           </form>
    </body>

</html>