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

<title>Ex propietario</title>

<div class="sidebar">
<a href="../home.php?"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="../Marcas/marcas.php"><i class="fa fa-fw fa-star "></i> Marcas</a>
  <a href="../Automoviles/automoviles.php"><i class="fa fa-fw fa-car "></i> Automoviles</a>
  <a href="../Vendedores/vendedores.php"><i class="fa fa-fw fa-book"></i> Vendedores</a>
  <a href="../Clientes/clientes.php"><i class="fa fa-fw fa-list"></i> Clientes</a>
  <a href="../Ventas/ventas.php"><i class="fa fa-fw fa-tag"></i> Ventas</a>
  <a href="usador.php"><i class="fa fa-fw fa-user"></i> Ex propietario</a>
  <a href="../Compras/compras.php"><i class="fa fa-fw fa-cart-arrow-down"></i> Compras</a>
  <a href="../Repara/repara.php"><i class="fa fa-fw fa-check-circle"></i> Repara</a>
  <a href="../Reparaciones/reparaciones.php"><i class="fa fa-fw fa-wrench"></i> Reparaciones</a>
  <a href="../Revisiones/revisiones.php"><i class="fa fa-fw fa-check"></i> Revisiones</a>
</div>


<div class="main" class="container" style="background-color:#f1f1f1">
 <center>
	 <th></th>
	 <th></th>
 <div>
	<a href="agregar_usador.php"><button type="text" class="agregar">Agregar</button></a>
	</div>
<table>
	
		<tr>
			<th style="width: 100%">

			<form  id="form2" name="form2" method="POST" action="usador.php">

			<h3 align="left" >Expropietario a buscar</h3>
			<input type="text" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
			<input type="submit"  value="Ver"> 
			</form>
			<?php 

		if(is_numeric( $_POST["buscar"])==false)
			{
					$query = "SELECT * FROM usador WHERE nombre_usa LIKE '%".$_POST["buscar"]."%' "; 
			}
			else{
					$bus=(int)  $_POST["buscar"];
					$query = "SELECT * FROM usador WHERE cedula_usa=$bus"; 
			}
			$consulta = pg_query($conn, $query);
			$numeroSql = pg_num_rows($consulta);

?>

		<p style="font-weight: bold; color:green;"><?php echo $numeroSql; ?> Resultados encontrados</p>
				
				<table>
					<thead>
						<tr style="background-color:#127EC8">
							<th><h2>Cedula expropietario</h2></th>
							<th><h2>Nombre</h2></th>
							<th><h2>Telefono</h2></th>
							<th><h2>|Editar</h2></th>
							<th><h2>Eliminar|</h2></th>
							
						</tr>
					</thead>

					
					<tbody>
						<?php

							while($row = pg_fetch_array($consulta)){
						?>
						<tr>
							<th><input type="text" value = "<?php echo $row['cedula_usa'] ?>"readonly></th>
							<th><input type="text" value = "<?php echo $row['nombre_usa'] ?>"readonly></th>
							<th><input type="text" value = "<?php echo $row['telefono_usa'] ?>"readonly></th>
							<th><a href="actualizar_usador.php?cedula_usa=<?php echo $row['cedula_usa'] ?>"><button type="submit">Editar</button></a></th>
							<th><a href="eliminar_usador.php?cedula_usa=<?php echo $row['cedula_usa'] ?>"><button type="button" class="cancelbtn">Eliminar</button></a></th>

						</tr>
						
						<?php 	}	?>


					</tbody>
				</table>
				
			</th>
		</tr>
	</table>
	</center>
						</div>
</body>
</html>