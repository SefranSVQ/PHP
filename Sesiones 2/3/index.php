<?php
/* Enunciado:
Escriba un programa con un botón jugar que tras pulsar el mismo reduzca en una unidad el
número de monedas y muestre tres imágenes de frutas de forma aleatoria (rango unicode:
127817 a 127827) siempre que se disponga de monedas. 

En caso de no disponer de monedas, las imágenes que se mantendrán serán las últimas mostradas.

El programa también tiene que tener un botón “Meter moneda” que hace que un contador
de monedas se incremente y nos permita jugar.

En función de las frutas obtenidas, tras pulsar el botón jugar, podemos obtener un premio
en formas de monedas que hará que nuestro contador de monedas se incremente.
Los premios son los siguientes (no tienen por qué comprobarse en este orden):

● Si sale una fresa, se gana una moneda.
● Si salen dos fresas, se ganan cuatro monedas.
● Si salen tres fresas, se ganan diez monedas.
● Si salen dos frutas iguales que no sean fresas, se ganan dos monedas.
● Si salen tres frutas iguales que no sean fresas, se ganan cinco monedas.
● Si sale una fresa y dos frutas iguales, se ganan tres monedas.
● En el resto de casos, se pierde una moneda.

Código unicode de la fresas: 127827

*/

    // Funciones:

    function realizarTirada(){
        $baseSimbolos = 127817;  
        for ($i = 0; $i < 3 ; $i++){
            $_SESSION["frutas"][$i] = (rand(0, 10)+$baseSimbolos);
        }
    }

    // Página
    session_name("juegofrutas");
    session_start();
    
    $baseSimbolos = 127817;  

    // Valores iniciales variables sesión
    if (!isset($_SESSION["monedas"]) || !isset($_SESSION["frutas"])|| !isset($_SESSION["premio"]))  {  
        $_SESSION["monedas"] = 0;
        $_SESSION["premio"] = 0;
        realizarTirada();
        header("Location:index.php");
    } else {
        $fruta1 = $_SESSION["frutas"][0];
        $fruta2 = $_SESSION["frutas"][1];
        $fruta3 = $_SESSION["frutas"][2];
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejercicio 2</title>
        <style> 
            #miTabla{
                border: 1px solid black;
                margin-left: auto; 
                margin-right: auto;
                width: 60%;
                height: 500px;
            }

            .celda{
                border: 1px solid black;
                text-align: center;
                font-size:120px;
                width: 15%;
            }

            .celda2 {
                border: 1px solid black;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1 style="text-align:center">JUEGO DE FRUTAS</h1>

        <form action="2.php" method="POST">
            <table id="miTabla">
                <tr>
                    <td class="celda"> <?php print("&#$fruta1"); ?>  </td>
                    <td class="celda"> <?php print("&#$fruta2"); ?> </td>
                    <td class="celda"> <?php print("&#$fruta3"); ?> </td>
                    <td class="celda2">
                         <p> <input type="submit" value="Insertar Moneda" name="insertarMoneda"> </input> </p>
                         <p> Monedas: <?php print($_SESSION["monedas"]); ?> </p>
                         <p> <input type="submit" value="Tirar" name="tirar"> </input></p>
                         <p> Premio: <?php print($_SESSION["premio"]); ?> </p>
                    </td>
                </tr>
            </table>  
        </form>
    </body>
</html>
<?php
    }
?>