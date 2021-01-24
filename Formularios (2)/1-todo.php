<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Convertidos sec -> min y sec</title>
        
    </head>

    <body>
        <?php
            if (!isset($_REQUEST['segundos'])){
        ?>
        <form action="" method="post">
            <p></p>Segundos: <input type="text" name="segundos"> </p>
            <p><input type="submit" value="Enviar" name="boton"/></p>
        </form>

        <?php
            }
            else {
                $entrada = $_REQUEST['segundos'];
                if (ctype_digit($entrada) && $entrada > 0){
                    $min = intdiv($entrada,60);
                    $sec = $entrada%60;
                    print ("$entrada segundo(s) corresponden a $min minuto(s) y $sec segundo(s)");
                }
                else print("Error de entrada de datos. Por favor, inserte un número entero positivo.");
            }
        ?>
    </body>

</html>