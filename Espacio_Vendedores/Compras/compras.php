<?php


include("conexion.php");

$conn=conectar();

session_start();


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/a076d05399.js" ></script>

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

</div>

<div class="main" class="container" style="background-color:#f1f1f1">
 <center>
	 <th></th>
	 <th></th>
 <div>
	<a href="agregar_compra.php"><button type="text" class="agregar">Agregar</button></a>
	</div>
<table>
	
		<tr>
		
	
			<th style="width: 100%">

			<form  id="form2" name="form2" method="POST" action="compras.php">

				<h3 align="left" >Compra a buscar</h3>
				<input type="text" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
				<input type="submit"  value="Ver"> 
				</form>
				<?php 

						if(is_numeric( $_POST["buscar"])==false)
							{
									$query = "SELECT * FROM compra WHERE fk_automovil_matricula_auto LIKE '%".$_POST["buscar"]."%'  "; 
							}
							else{
									$bus=(int)  $_POST["buscar"];
									$query = "SELECT * FROM compra WHERE codigo_compra=$bus OR fk_usador_cedula_usa=$bus"; 
							}
							$consulta = pg_query($conn, $query);
							$numeroSql = pg_num_rows($consulta);

				?>

						<p style="font-weight: bold; color:green;"><?php echo $numeroSql; ?> Resultados encontrados</p>

				<table>
					<thead>
						<tr style="background-color:#127EC8">
							<th><h2>Codigo de compra</h2></th>
							<th><h2>Fecha</h2></th>
							<th><h2>Precio</h2></th>
							<th><h2>Cedula usador</h2></th>
							<th><h2>Matricula del auto</h2></th>
							<th><h2>|Editar</h2></th>
							<th><h2>|Eliminar|</h2></th>
							
						</tr>
					</thead>

					
					<tbody>
						<?php 

							while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><input type="text" value = "<?php echo $row['codigo_compra'] ?>"readonly></th>
							<th><input type="date" value = "<?php echo $row['fecha_de_compra'] ?>"readonly></th>
							<th><input type="number" value = "<?php echo $row['precio_compra'] ?>"readonly></th>
							<th><a href="../Expropietario/usador.php"><input type="text" value = "<?php echo $row['fk_usador_cedula_usa'] ?>"readonly></a></th>
							<th><a href="../Automoviles/automoviles.php"><input type="text" value = "<?php echo $row['fk_automovil_matricula_auto'] ?>"readonly></a></th>
							<th><a href="actualizar_compra.php?codigo_compra=<?php echo $row['codigo_compra'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_compra.php?codigo_compra=<?php echo $row['codigo_compra'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>

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