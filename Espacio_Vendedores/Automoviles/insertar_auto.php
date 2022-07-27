
<?php

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
	


	$query = "INSERT INTO automovil VALUES('$matricula_auto', $precio_auto, '$vin', '$color', '$modelo', '$marca','$estado')";
	$consulta = pg_query($conn, $query);

	if($consulta){
		Header("Location:automoviles.php");
	}else{
		Header("Location:agregar_auto.php?error=1");
	}

?>