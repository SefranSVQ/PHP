<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio 3</title>
        
    </head>

    <body>
        <?php
            $entrada = $_REQUEST;
            $valido=false;
            $mensaje="";

            if (isset($entrada["nombre"]) && $entrada["nombre"] != ""
            && isset($entrada["apellidos"]) && $entrada["apellidos"] != ""
            && isset($entrada["edad"]) && is_numeric($entrada["edad"]) 
            && isset($entrada["genero"])){
                $nombre = $_REQUEST["nombre"];
                $apellidos = $_REQUEST["apellidos"];
                $edad = $_REQUEST["edad"];
                $genero = $_REQUEST["genero"];
                if(isset($_REQUEST["aficiones"])){
                    $aficiones = $_REQUEST["aficiones"];
                }
                else $aficiones = false;
                
                $valido = true;
            }
            else if(isset($entrada["boton"])){
                $mensaje = "Error en la entrada de datos: <br>";
                if (!isset($entrada["nombre"]) || $entrada["nombre"]==""){
                    $mensaje .= "Nombre no insertado.<br>";
                }
                if (!isset($entrada["apellidos"]) || $entrada["apellidos"]==""){
                    $mensaje .= "Apellidos no insertados.<br>";
                }
                if (!isset($entrada["edad"]) || !is_numeric($entrada["edad"]) ){
                    $mensaje .= "Edad no válida.<br>";
                }
                if (!isset($entrada["genero"])){
                    $mensaje .= "Genero no insertado.<br>";
                }
            }
            
            if ($valido){
                print("Nombre: $nombre <br>");
                print("Apellidos: $apellidos <br>");
                print("Edad: $edad <br>");
                print("Género: $genero <br>");
                print("Aficiones: ");
                if ($aficiones){
                    foreach ($aficiones as $i){
                        print($i.",");
                    }
                }
                else{
                    print("Ninguna. >=(");
                }
            }
            else{  
                print($mensaje);
        ?>
        <form action="" method="post">
            <p>Necesitamos tus datos personales para actividades de dudosa legalidad:</p>
            <p>Nombre: <input type="text" name="nombre"> </p>
            <p>Apellidos: <input type="text" name="apellidos"> </p>
            <p>Edad: <input type="text" name="edad"> </p>

            <p>Género:</p>
            <input type="radio" name="genero" value="hombre"> hombre <br>
            <input type="radio" name="genero" value="mujer"> mujer <br>
            <input type="radio" name="genero" value="otro"> Otro / NS / NC <br>

            <p>Aficiones:</p>
            <input type="checkbox" name="aficiones[]" value="musica"> Música <br>
            <input type="checkbox" name="aficiones[]" value="deporte"> Deporte <br>
            <input type="checkbox" name="aficiones[]" value="cine"> Cine <br>
            <input type="checkbox" name="aficiones[]" value="lectura"> Lectura <br>
            <input type="checkbox" name="aficiones[]" value="videojuegos"> Videojuegos <br>
            <input type="checkbox" name="aficiones[]" value="viajes"> Viajes <br>

            <p><input type="submit" name="boton" value="enviar"/></p>
        </form>
        <?php
            }
        ?>
    </body>

</html>