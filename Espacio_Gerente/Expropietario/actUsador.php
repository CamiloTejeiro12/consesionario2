<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

    $usuario=$_SESSION['nombre_usuario'];

	$cedula_usa = $_POST['cedula_usa'];
	$nombre_usa = $_POST['nombre_usa'];
	$telefono_usa = $_POST['telefono_usa'];

	$query = "UPDATE usador SET nombre_usa = '$nombre_usa', telefono_usa = $telefono_usa WHERE cedula_usa = '$cedula_usa'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:usador.php");
	}else{
		Header("Location:actualizar_usador.php?error=1");
	}

?>