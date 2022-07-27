
<?php

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


	$query = "INSERT INTO venta VALUES($codigo_venta, '$fecha_venta', $precio_venta, $cedula_cli, $codigo_vende, '$matricula_auto')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:ventas.php");
	}else{
		Header("Location:agregar_venta.php?error=1");
	}

?>