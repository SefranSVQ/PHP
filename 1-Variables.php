<?php 
    
    // Contenido basura de prueba
    $num1 = 1;
    $num2 = 2;
    $cadena = "prueba";
    $booleano = true;
    $array = [[1,2,3],[4,5,6]];
    $hoy = date('d-m-y');
    $aleatorio = rand(0,999);

    print "suma de los 2 numeros: ".($num1+$num2);
    print "<br>multiplicacion de los 2 numeros: ".($num1*$num2);
    print "<br>Booleano: $booleano";
    print "<br>Valores de un array bidimensional:";

    for($i = 0; $i < count($array) ;$i++){
        print "<br>Valores de $i: ";
        for ($j = 0; $j  < count($array[$i]) ;$j++){
            print "<br>".$array[$i][$j];
        }
    }

    print "<br>hoy es: ".$hoy;
    print "<br>Estamos a";
    if (date('d') < 15){
        print " principios de mes";
    }
    else {
        print " finales de mes";
    }

    print "<br>Num aleatorio: ".$aleatorio;
    print ".<br> Este número tiene ".strlen($aleatorio)." cifra(s)";

    $edades =  ['Juan' => 18,'María' => 22];
    print "<br>Juan tiene $edades[Juan] años";

    $personas = [ 'codigo1' => ['Juan',20,85], 'codigo2'  => ['María',25,76]];
    print "<br>Peso de Juan: ".$personas['codigo1'][2];
    print "<br>";
    print_r($personas);
    unset($personas[2]);
    print "<br>";
    print_r($personas);
    unset($personas[1]);
    print "<br>";
    print_r($personas);
    unset($personas[0]);
    print "<br>";
    print_r($personas);

    $miArray1 = [78,55,30];
    $miArray2 = [22,41,30];
    print "<br>";
    print_r (array_merge($miArray1,$miArray2));

    $miArray1 = [1=>78,2=>55,3=>30];
    $miArray2 = [1=>77,2=>44,3=>30];
    print "<br>";
    print_r (array_merge($miArray1,$miArray2));

    print "<br> count de miarray1: ".count($miArray1);
    print "<br> array numerico ordenador: ";
    sort($miArray1);
    print_r($miArray1);
    print "<br> array de nombres ordenador";
    $nombres = ['Geranio','Clavel','Rosa'];
    sort($nombres);
    print_r($nombres);
    print "<br>";
    sort($edades);
    print_r($edades);
    
    switch(2){
        case 2:
            print ("<br>er brikinsdans");
        break;
    }

?>