<?php

// Conexión a la BBDD

    // Por constructor
$conexion = new mysqli ('localhost', 'root', '', 'ejemplo');

// Control de inicio de conexión
if ($conexion->connect_errno != null) {
    print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
    exit();
}   

// Realización de consulta (Poner distintos ejemplos de consulta, 
//      inserción, modificación, borrado...)

    // manejo de consultas

    // El método fetch_array() obtiene 1 fila de la consulta.
    //  Puede tener 3 valores en el parámetro:
    //  MYSQLI_NUM (asocia nums), MYSQLI_ASSOC (asocia nombres), 
    //  MYSQLI_BOTH (ambas, por defecto)

        // Usando query (obtienes los datos directamente)
$resultado = $conexion->query("select * from Alumnos where codigocurso");
    // $row = $resultado->fetch_object(); // Obtenemos un objeto en vez de un array
while ($row = $resultado->fetch_array()) {
    print "<p>Nombre: " . $row["nombre"];
}

        // Usando real_query (obtienes true o false en función de si se ha ejecutado)
        // En caso de que quieras obtener los datos, hay que usar el método store_result()
$correcto = $conexion->real_query("SELECT * from Alumnos");
if ($correcto){
    $resultado = $conexion->store_result(); // Almacena los datos localmente
    //$resultado = $conexion->use_result(); // Usa los datos según se vayan necesitando

    $row = $resultado->fetch_array();
    print_r ($row);
    print("<br> ".$row[0]."<br>"); // Asociación numérica    
    print($row['nombre']."<br>"); // Asociación por nombre
    $resultado->free(); //Liberamos el espacio de memoria.
}

    // Ejemplo de fecth_all() -> obtienes todos los resultados de golpe. (Opción no preferible)
$resultado = $conexion->query("SELECT * from Alumnos");
$rows = $resultado->fetch_all();
// para mostrar todos los datos
foreach ($rows as $row) {
    print_r ($row);
    foreach ($row as $clave => $valor) {
    print "<p> $clave: $valor </p>";
    }
}

    // Consulta preparada.
$consulta = $conexion->stmt_init(); // iniciamos consulta
// Preparamos la consulta, donde cada ? indica un valor.
$consulta->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (?,?,?,?)");

$nombre = 'Nombre';
$apellidos = 'Apellidos';
$email = 'email@email.com';
$codigocurso = 1;

// con bind_param asoaciamos distintas variables a la consulta.
// sssi indica que los parámetros son de tipo string, string, string e int.
// s -> string, i -> integer, b -> boolean, d -> decimal
$consulta->bind_param('sssi', $nombre, $apellidos, $email, $codigocurso); 

$consulta->execute();
$consulta->close();

// Obtener la cantidad de filas afectadas con el método affected_rows 
//      (borrar, insertar, modificar)
print "<p>Registros afectados: " . $conexion->affected_rows ."</p>";

// Cerrar conexión
$conexion->close();

?>