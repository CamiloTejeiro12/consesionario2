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
<script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<body>

<title>Venta</title>

<div class="sidebar">
<a href="../home.php?"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="../Expropietario/usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="../Compras/compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
  <a href="../Usuarios/usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>

</div>


<div class="main" class="container" style="background-color:#f1f1f1">
 <center>
	 <th></th>
	 <th></th>

 <a href="agregar_venta.php"><button type="text" class="agregar">Agregar</button></a>
	
<table>
	
		<tr>
		
	
			<th style="width: 100%">


			<form  id="form2" name="form2" method="POST" action="ventas.php">

				<h3 align="left" >Venta a buscar</h3>
				<input type="text" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
				<input type="submit"  value="Ver"> 
				</form>
				<?php 

						if(is_numeric( $_POST["buscar"])==false)
							{
									$query = "SELECT * FROM venta WHERE fk_automovil_matricula_auto LIKE '%".$_POST["buscar"]."%'  "; 
							}
							else{
									$bus=(int)  $_POST["buscar"];
									$query = "SELECT * FROM venta WHERE codigo_venta=$bus OR fk_cliente_cedula_cli=$bus OR fk_vendedor_codigo_vende=$bus"; 
							}
							$consulta = pg_query($conn, $query);
							$numeroSql = pg_num_rows($consulta);

				?>

		<p style="font-weight: bold; color:green;"><?php echo $numeroSql; ?> Resultados encontrados</p>

				<table>
					<thead>
						<tr style="background-color:#127EC8">
							<th><h2>Codigo de venta</h2></th>
							<th><h2>Fecha de venta</h2></th>
							<th><h2>Precio de la venta</h2></th>
							<th><h2>Cedula cliente</h2></th>
							<th><h2>Codigo vendedor</h2></th>
							<th><h2>Matricula del carro vendido</h2></th>
							<th><h2>|Editar</h2></th>
							<th><h2>Eliminar|</h2></th>
							
						</tr>
					</thead>

					
					<tbody>
						<?php 

							while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><input type="text" value = "<?php echo $row['codigo_venta'] ?>"readonly></th>
							<th><input type="text" value = "<?php echo $row['fecha_venta'] ?>"readonly></th>
							<th><input type="text" value = "<?php echo $row['precio_venta'] ?>"readonly></th>
							<th><a href="../Clientes/clientes.php"><input type="text" value = "<?php echo $row['fk_cliente_cedula_cli'] ?>"readonly></a></th>
							<th><a href="../Vendedores/vendedores.php"><input type="text" value = "<?php echo $row['fk_vendedor_codigo_vende'] ?>"readonly></a></th>
							<th><a href="../Automoviles/automoviles.php"><input type="text" value = "<?php echo $row['fk_automovil_matricula_auto'] ?>"readonly></a></th>
							<th><a href="actualizar_venta.php?codigo_venta=<?php echo $row['codigo_venta'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_venta.php?codigo_venta=<?php echo $row['codigo_venta'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>


							

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