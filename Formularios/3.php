<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$res;

switch ($_REQUEST['operacion']) {
    case 'suma':
        $res = $num1 + $num2;
        break;
    
    case 'resta':
        $res = $num1 - $num2;
        break;

    case 'multiplicacion':
        $res = $num1 * $num2;
        break;
        
    default:
        $res = 'error: sin operacion.';
        break;
}

print("Su resultado: $res");

?>
