<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

    $usuario=$_SESSION['nombre_usuario'];

	$cedula_cli = $_POST['cedula_cli'];
	$nombre_cli = $_POST['nombre_cli'];
	$apellidos_cli = $_POST['apellidos_cli'];
	$fecha_nacimiento_cli = $_POST['fecha_nacimiento_cli'];
	$telefono_cli = $_POST['telefono_cli'];
	$direccion_cli = $_POST['direccion_cli'];

	


	$query = "UPDATE cliente SET nombre_cli = '$nombre_cli', apellidos_cli = '$apellidos_cli', fecha_nacimiento_cli = '$fecha_nacimiento_cli', telefono_cli = $telefono_cli, direccion_cli = '$direccion_cli' WHERE cedula_cli = '$cedula_cli'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:clientes.php");
	}else{
		Header("Location:actualizar_cliente.php?error=1");
	}

?>