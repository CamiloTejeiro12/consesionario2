<?php


include("conexion.php");

$conn=conectar();


?>


<?php

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
	 <th></th>
	 <th></th>

		<div class="main" class="container" style="background-color:#f1f1f1">
		<table>

		<a href="agregar_marca.php"><button type="text" class="agregar">Agregar</button></a>
		
		<tr>
			<th style="width: 100%">
				<table>
					<thead>
						<tr>
							<th><h2>Marca</h2></th>	
						</tr>
					</thead>

					
					<tbody>
						<?php 

							$query = "SELECT * FROM marca";
							$consulta = pg_query($conn, $query);
							while($row = pg_fetch_array($consulta)){
						?>
						
						<tr>
							<th><input type="text" value = "<?php echo $row['nombre_marca'] ?>"readonly></th>
							<th><a href="actualizar_marca.php?nombre_marca=<?php echo $row['nombre_marca'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_marca.php?nombre_marca=<?php echo $row['nombre_marca'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>
						</tr>
						
						<?php 
							}
						 ?>


					</tbody>
				</table>
				
			</th>
		</tr>
		</table>
	</center>
						
		
	</div>
</body>
</html>