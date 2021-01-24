<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Calculadora</title>
    </head>

    <body>
        <?php
        session_start();
            require 'utilidades.php';

            print(session_status());
            $a = session_id();
            //session_start();
            //print(session_status());
            if (isset($_REQUEST['num1']) && is_numeric($_REQUEST['num1']) 
                && isset($_REQUEST['num2']) && is_numeric($_REQUEST['num2'])){ 

                $_SESSION = $_REQUEST;
                $e = $_SESSION;
                $num1 = $e['num1'];
                $num2 = $e['num2'];
                $operacion;

                if(!isset($e['operacion'])) $operacion = 'suma';
                else $operacion = $e['operacion'];

                $res = realizarOperacion();
                
                print("Resultado: $res");
            }
            else {
        ?>
        <form action="" method="post">
            <p><input type="input" name="num1"/></p>
            <p><input type="input" name="num2"/></p>
            <p><input type="radio" name="operacion" value="suma"> Sumar </p>
            <p><input type="radio" name="operacion" value="resta"> Restar </p>
            <p><input type="radio" name="operacion" value="multiplicacion"> Multiplicación </p>
            <p><input type="radio" name="operacion" value="division"> División </p>
            <p><input type="submit" name="boton" value="Enviar"/></p></p>
           </form>
    </body>
        <?php 
            }
        ?>
</html>