<?php

session_name("dados");
session_start();

if (!isset($_POST["tirar"]) && !isset($_POST["empezar"])){
	header("location:ejercicio-02-01.php");
}

if (isset($_POST["empezar"])){
	$_SESSION["max"] = 0;
}

header("location:ejercicio-02-01.php");


?>