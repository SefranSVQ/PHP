<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejecicio 2</title>
        
    </head>

    <body>
        <?php
            $valido=false;
            $mensaje="";
            $cociente;
            $resto;
            $esExacta="No";

            if (isset($_REQUEST["dividendo"]) && isset($_REQUEST["divisor"])){
                $dividendo = $_REQUEST["dividendo"];
                $divisor = $_REQUEST["divisor"];
                if (!is_numeric($divisor) || !is_numeric($dividendo)){
                    $mensaje = "Error de entrada; los datos no son numéricos.";
                }
                else if($divisor < 1 || $divisor > 9999 || $dividendo < 0 || $dividendo > 10000){
                    $mensaje = "Error de entrada; los datos no se encuentran en el rango válido.";
                }
                else {
                    $valido=true;
                    $cociente = $dividendo/$divisor;
                    $resto = $dividendo%$divisor;
                    
                    if ($resto==0){
                        $esExacta="Sí";
                    }
                }
            }

            if ($valido){
                print("Se ha introducido la siguiente operación: $dividendo/$divisor <br>");
                print("Cociente: $cociente <br>");
                print("¿Es la división exacta?: ".$esExacta);
            }
            else{  
                print($mensaje);
        ?>
        <form action="" method="post">
            <p>Dame un dividendo y un divisor y te daré el resultado:</p>
            <p>Dividendo: <input type="text" name="dividendo"> </p>
            <p>Divisor: <input type="text" name="divisor"> </p>
            <p><input type="submit" value="Enviar" name="boton"/></p>
        </form>
        <?php
            }
        ?>
    </body>

</html>