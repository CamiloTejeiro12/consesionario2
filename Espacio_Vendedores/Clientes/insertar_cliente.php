
<?php

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
	


	$query = "INSERT INTO cliente VALUES($cedula_cli, '$nombre_cli', '$apellidos_cli', '$fecha_nacimiento_cli', $telefono_cli, '$direccion_cli')";
	$consulta = pg_query($conn, $query);

	$user_cliente = "INSERT INTO usuarios_cliente VALUES('$nombre_cli','unillanos')";
	$consulta = pg_query($conn, $user_cliente);

	if($consulta){
		Header("Location:clientes.php");
	}else{
		Header("Location:agregar_cliente.php?error=1");
	}

?>