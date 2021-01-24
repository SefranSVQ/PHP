<?php

$conexion = new mysqli();
// ruta, usuario, contraseña, tabla
$conexion->connect('localhost','root','','ejemplo');

//print "AA".$conexion->connect_error;

//$conexion->select_db('test');

// insertar
/*
$valor = $conexion->query("insert into alumnos(nombre, apellidos, email, codigocurso)
                values('Sefran','Er pogramadó','sexybear@ejemplo.org',1)");

if ($valor){
    print "Insertado";
}
else {
    print "No insertado";
}
*/
// modificar
// $conexion->query("update alumnos set email='todocorrecto@ejemplo.org' where codigo=1");

$res = $conexion->query("select * from alumnos");
$dato = $res->fetch_array();

while($dato != null){
    print($dato["nombre"]);
    $dato = $res->fetch_array();
    print("<p></p><p>------------------------</p><p></p>");
}
/*
$res = $conexion->query("select * from alumnos");
$dato = $res->fetch_object();
while($dato != null){
    print($dato->nombre);
    $dato = $res->fetch_object();
    print("<p></p><p>------------------------</p><p></p>");
}
*/

$conexion->close();

?>