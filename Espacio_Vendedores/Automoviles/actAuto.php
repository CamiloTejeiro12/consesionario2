<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

	$matricula_auto = $_POST['matricula_auto'];
	$precio_auto = $_POST['precio_auto'];
	$vin = $_POST['vin'];
	$color = $_POST['color'];
	$modelo = $_POST['modelo'];
	$marca = $_POST['nombre_marca'];
    $estado = $_POST['estado'];
	


	$query = "UPDATE automovil SET precio_auto = $precio_auto, vin = '$vin', color = '$color', modelo = '$modelo', fk_marca_nombre_marca = '$marca', estado = '$estado' WHERE matricula_auto = '$matricula_auto'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:automoviles.php");
	}else{
		Header("Location:actualizar_auto.php?error=1");
	}

?>