
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

</head>
<body>

<title>Compras</title>

<div class="sidebar">
<a href="../home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>

<center>
<div class="main" class="container" style="background-color:#f1f1f1">
 
<table>
		<th style = "width: 500px">
				<h1>Agregar Compra: </h1>
				<div>
				<a href="compras.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "insertar_compra.php" method = "POST">
						<input type="text" name="codigo_compra" placeholder="Codigo de la compra">
						<br><br>
						<input type="date" name="fecha_de_compra" placeholder="Fecha">
						<br><br>
						<input type="number" name="precio_compra" min="1" max="2147483647" placeholder="Precio">
						<br><br>
						<input type="number" name="cedula_usa" min="1" max="2147483647" placeholder="Cedula del expropietario">
						<br><br>
						<input type="text" name="matricula_auto" required minlength="6" maxlength="6" size="6" placeholder="Matricula del auto">
						<br><br>
						<button type="submit">Ingresar</button>
					</form>
			</th>
	</table>



</div>
</center>  
</body>
</html> 

