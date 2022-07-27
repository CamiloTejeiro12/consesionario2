<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("conexion.php");

$conn=conectar();

session_start();

    $usuario=$_SESSION['nombre_usuario'];

    $codigo_venta = $_POST['codigo_venta'];


	$fecha_venta = $_POST['fecha_venta'];
	$precio_venta = $_POST['precio_venta'];
    $cedula_cli = $_POST['cedula_cli'];
	$codigo_vende = $_POST['codigo_vende'];
	$matricula_auto = $_POST['matricula_auto'];

	$query = "UPDATE venta SET fecha_venta = '$fecha_venta,' precio_venta = $precio_venta, cedula_cli = $cedula_cli ,codigo_vende = $codigo_vende, matricula_auto = '$matricula_auto' WHERE codigo_venta = '$codigo_venta'";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:ventas.php");
	}else{
		Header("Location:actualizar_venta.php?error=1");
	}

?>