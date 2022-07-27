

<?php


include("conexion.php");

$conn=conectar();

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

<title>Usuarios</title>

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
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
</div>


<center>
	 <th></th>
	 <th></th>


 <div class="main" class="container" style="background-color:#f1f1f1">
	

<table>
	
		<tr>
				<th style="width: 100%">

					<a href="agregar_usuario_cliente.php"><button type="text" class="agregar">Agregar usuario Cliente</button></a>
		
					<form  id="form2" name="form2" method="POST" action="usuarios.php">
					
					<h3 align="left" >Usuario a buscar</h3>
					<input type="text" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
					<input type="submit"  value="Ver"> 
					</form>


					<?php 

							$query = "SELECT * FROM usuarios_cliente WHERE cliente LIKE '%".$_POST["buscar"]."%'    ";
							$consulta = pg_query($conn, $query);
							$numeroSql = pg_num_rows($consulta);						
					?>

					<p style="font-weight: bold; color:green;"><?php echo $numeroSql; ?> Resultados encontrados</p>

			
					<table>
					<thead>
						<tr style="background-color:#127EC8">
							<th><h2>Usuario Cliente</h2></th>
							<th><h2>Contraseña</h2></th>
							<th><h3>Editar</h3></th>
							<th><h3>Eliminar</h3></th>
							
						</tr>
					</thead>

					
					<tbody>
					<?php while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><input type="text" value = "<?php echo $row['cliente'] ?>" readonly></th>
							<th><input type="text" value = "<?php echo $row['contraseña'] ?>"readonly></th>
							<th><a href="actualizar_usuario_cliente.php?cliente=<?php echo $row['cliente'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_user_cliente.php?cliente=<?php echo $row['cliente'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>

						</tr>
						
						<?php 
							}
						 ?>


							
					<?php 

							$query = "SELECT * FROM usuarios_vendedor WHERE vendedor LIKE '%".$_POST["buscar"]."%'    ";
							$consulta = pg_query($conn, $query);
							$numeroSql = pg_num_rows($consulta);						
					?>

					

			
					<table>
						<p style="font-weight: bold; color:green;"><?php echo $numeroSql; ?> Resultados encontrados</p>
					<a href="agregar_usuario_vendedor.php"><button type="text" class="agregar">Agregar usuario vendedor</button></a>
					<thead>
						<tr style="background-color:#127EC8">
							<th><h2>Usuario Vendedor</h2></th>
							<th><h2>Contraseña</h2></th>
							<th><h3>Editar</h3></th>
							<th><h3>Eliminar</h3></th>
							
						</tr>
					</thead>

					
					<tbody>
					<?php while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><input type="text" value = "<?php echo $row['vendedor'] ?>" readonly></th>
							<th><input type="text" value = "<?php echo $row['contraseña'] ?>"readonly></th>
							<th><a href="actualizar_usuario_vendedor.php?vendedor=<?php echo $row['vendedor'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_user_vendedor.php?vendedor=<?php echo $row['vendedor'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>

						</tr>
						
						<?php 
							}
						 ?>


					<?php 

							$query = "SELECT * FROM usuarios_gerente WHERE gerente LIKE '%".$_POST["buscar"]."%'    ";
							$consulta = pg_query($conn, $query);
							$numeroSql = pg_num_rows($consulta);						
					?>

					

			
					<table>
						<p style="font-weight: bold; color:green;"><?php echo $numeroSql; ?> Resultados encontrados</p>
					<a href="agregar_usuario_gerente.php"><button type="text" class="agregar">Agregar usuario gerente</button></a>
					<thead>
						<tr style="background-color:#127EC8">
							<th><h2>Usuario Gerente</h2></th>
							<th><h2>Contraseña</h2></th>
							<th><h3>Editar</h3></th>
							<th><h3>Eliminar</h3></th>
							
						</tr>
					</thead>

					
					<tbody>
					<?php while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><input type="text" value = "<?php echo $row['gerente'] ?>" readonly></th>
							<th><input type="text" value = "<?php echo $row['contraseña'] ?>"readonly></th>
							<th><a href="actualizar_usuario_gerente.php?gerente=<?php echo $row['gerente'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_user_gerente.php?gerente=<?php echo $row['gerente'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>

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