<html>
    <body>
<?php

$conexion = new mysqli();
// ruta, usuario, contraseña, tabla
$conexion->connect('localhost','root','','ejemplo');

$res = $conexion->query("select * from alumnos");
$datos = $res->fetch_all();

print("<table style=\"border: solid black 1px; width: 100%\">");
foreach ($datos as $dato){
    print("<tr>");
    foreach ($dato as $campo){
        print_r("<td style=\"border: solid black 1px\">".$campo."</td>");
    }
    print("</tr>");
}
print("</table>");

?>
    <form action="nuevoUsuario.php" method="post">
        <p><input type="submit" value="Añadir Usuario"/></p>
    </form>
<?php

?>
    </body>
</html>

