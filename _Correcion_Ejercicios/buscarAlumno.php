<?php 
//conexion BBDD
$contenido = $_POST["contenido"];
$conexion = new mysqli();
$conexion->connect('localhost','root','','ejemplo');

//solicitud de datos
//$consulta = "select * from alumnos where email like '%$contenido%' or nombre like '%$contenido%'"; // contiene en el nombre o en el correo
$consulta = "select * from alumnos where email like '%$contenido%' and 
nombre like '%$contenido%'";// contiene en el nombre y en el correo

$res = $conexion->query($consulta);
$dato = $res->fetch_array();

//impresión de datos
//print("Usuarios que su correo o nombre contiene '".$_POST["contenido"]."'");
//print("Usuarios que su correo y nombre contiene '".$_POST["contenido"]."'");
print("Usuarios borrados que contienen '".$_POST["contenido"]."' en el email y en el nombre:");
print("<ol>");
while($dato != null){
    print("<li>Nombre completo del alumno: ".$dato["nombre"]." ".$dato["apellidos"].". Correo: ".$dato["email"]."</li>");
    $dato = $res->fetch_array();
}
print("</ol>");

$consulta = "delete from alumnos where email like '%$contenido%' and nombre like '%$contenido%'";// contiene en el nombre y en el correo// borra al alumno
//$res = $conexion->query($consulta);
?>