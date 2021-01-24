<?php
    function realizarOperacion(){
        session_start();

        $e = $_SESSION;
        $num1 = $e['num1'];
        $num2 = $e['num2'];
        $operacion;
        if(!isset($e['operacion'])) $operacion = 'suma';
        else $operacion = $e['operacion'];

        switch($operacion){
            case 'resta':
                $res = $num1 - $num2;
            break;
            case 'multiplicacion':
                $res = $num1 * $num2;
            break;
            case 'division':
                if ($num2 == 0) $res = "Error: el divisor no puede ser 0";
                else $res = $num1 / $num2;
                
            break;
            default:
                $res = $num1 + $num2;
        }
        return $res;
    }

?>