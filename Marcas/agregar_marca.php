
<?php

require_once("conexion.php");

session_start();

$usuario=$_SESSION['nombre_usuario'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<title>Marcas</title>

<div class="sidebar">
<a href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Compras/compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>


	
 <center>

<table>
<div class="main" class="container" style="background-color:#f1f1f1">
		<th style = "width: 500px">
				<h1>Agregar Marca: </h1>
				<div>
				<a href="marcas.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "insertar_marca.php" method = "POST">
						<input type="text" name="nombre_marca" placeholder="Marca">
						<br><br>
						
						<button type="submit">Ingresar</button>
				
					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 

