<?php

  if (!isset($_POST)){
    header("Location: ejercicio-03-02.php");
  }

  $conexion = new PDO('mysql:host=localhost;dbname=dwes_dic2020', 'root','');
  $nombre = $_POST['nombre'];
  $presupuesto = $_POST['presupuesto'];
  $centro = $_POST['centro'];
  $id = $_POST['id'];

  print_r($_POST);

  try {
    $conexion->beginTransaction();
    print("UPDATE departamentos SET nombre='$nombre', presupuesto=$presupuesto, centro=$centro WHERE id=$id");
    $conexion->exec("UPDATE departamentos SET nombre='$nombre', presupuesto=$presupuesto, centro=$centro WHERE id=$id");

    } catch (Exception $e){
        print "<p>Ha habido algún error</p>";
        $conexion>rollback();
    }
  
  //header("Location: ejercicio-03-02.php");

?>