
<?php

include("conexion.php");

$conn=conectar();

session_start();

    $usuario=$_SESSION['nombre_usuario'];

	$cod_repara = $_POST['cod_repara'];
	$precio_repara = $_POST['precio_repara'];
	$reparacion_repara = $_POST['reparacion_repara'];



	$query = "INSERT INTO reparaciones VALUES($cod_repara, $precio_repara, '$reparacion_repara')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:reparaciones.php");
	}else{
		Header("Location:agregar_repara.php?error=1");
	}

?>