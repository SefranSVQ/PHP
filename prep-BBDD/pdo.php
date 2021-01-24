<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root','');

    // Consultas de acción (insert, delete, update)

// PDO::exec() devuelve el número de filas modificadas o borradas
// por la sentencia SQL ejecutada. 

try {
    $conexion->beginTransaction();
    
    $registros = $conexion->exec('DELETE FROM alumnos WHERE codigocurso=10');
    print "<p>Se han borrado $registros registros.</p>";

} catch (Exception $e){
    print "<p>Ha habido algún error</p>";
    $conexion>rollback();
}

    // Consultas select

// Realizamos la consulta con el método query
$resultado = $conexion->query('select * FROM alumnos');

// Podemos asociar las distintas columnas a distintas variables
$resultado->bindColumn(1, $codigo);
$resultado->bindColumn(2, $nombre);
$resultado->bindColumn(3, $apellidos);
$resultado->bindColumn(4, $email);
$resultado->bindColumn(5, $codigocurso);

// obtenemos cada una de las columnas con el método fetch

while ($registro = $resultado->fetch(/*PDO::FETCH_OBJ)*/)) {
    
    print "<p>Nombre: ".$registro['nombre']."</p>"; // nombre asociativo PDO::FETCH_ASSOC.
    print "<p>Nombre: ".$registro[1]."</p>";    // asociación por número PDO::FETCH_NUM.
    print "<p>Nombre: ".$nombre."</p>";    // variable asociada PDO::FETCH_BOUND

    // asociación por objeto. PDO::FETCH_OBJ (si o si en fetch)
    // print "<p>Nombre: ".$registro->nombre."</p>"; 
}

// Uso de fecthAll()
$resultado = $conexion->query('select * FROM alumnos');
$registros = $resultado->fetchAll();
// para mostrar todos los datos
foreach ($registros as $registro) {
    print_r ($registro);
    foreach ($registro as $clave => $valor) {
        print "<p> $clave: $valor </p>";
    }
}

$conexion = null;

?>