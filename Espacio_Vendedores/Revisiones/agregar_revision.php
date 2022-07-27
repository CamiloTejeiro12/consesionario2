
<?php

require_once("conexion.php");

session_start();

$error = $_GET['error'];

if ($error == "1") {
	echo '<script language = "javascript">alert("Datos incorrectos");</script>';
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<title>Revisiones</title>

<div class="sidebar">
<a href="../home.php?"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="../Compras/compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>

<center>
<div class="main" class="container" style="background-color:#f1f1f1">
<table>

		<th style = "width: 500px">
				<h1>Agregar revision: </h1>
				<div>
				<a href="revisiones.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "insertar_revision.php" method = "POST">
						<input type="number" name="codigo_revi" placeholder="codigo">
						<br><br>
						<input type="text" name="filtro" required required minlength="2" maxlength="20" size="20" placeholder="Filtro">
						<br><br>
						<input type="text" name="aceite" required required minlength="2" maxlength="20" size="20" placeholder="Aceite">
						<br><br>
						<input type="text" name="frenos" required required minlength="2" maxlength="20" size="20" placeholder="Frenos">
						<br><br>
						<input type="date" name="fecha_revi" required required minlength="2" maxlength="20" size="20" placeholder="Fecha">
						<br><br>
						<input type="text" name="matricula_auto" required minlength="6" maxlength="6" size="6" placeholder="Matricula Auto">
						<br><br>
						<input type="text" name="detalle" required minlength="2" maxlength="100" size="100" placeholder="Detalle">
						<br><br>
						<button type="submit">Ingresar</button>
					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 

