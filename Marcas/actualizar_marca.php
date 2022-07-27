<?php 

	include("conexion.php");
	$conn = conectar();

	$nombre_marca_vieja = $_GET['nombre_marca'];

	$query = "SELECT * FROM marca WHERE nombre_marca = '$nombre_marca_vieja'";
	$consulta = pg_query($conn, $query);
	$row = pg_fetch_array($consulta)

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
				<h1>Actualizando Marca: </h1>
				<div>
				<a href="marcas.php"><button type="button" class="cancelbtn">Regresar</button></a>
				</div>

					<form action = "actMarca.php?marca=<?$nombre_marca_vieja = $_GET['nombre_marca'] ?>" method = "POST">
                        <input type="hidden" name="nombre_marca" value = "<?php echo $row['nombre_marca'] ?>">
                        <br><br>
                        <input type="text" name="nombre_marca" placeholder="Precio" value = "<?php echo $row['nombre_marca'] ?>">
                        <br><br>

						<button type="submit">Actualizar</button>

					</form>
			</th>
	</table>



</div>
</center>
</body>
</html> 