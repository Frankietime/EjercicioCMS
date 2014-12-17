<?php //Conviene separar secciones de codigo (procesos por un lado, vistas por el otro) para acostumbrarse al metodo de trabajo Orientado a Objetos
	include "validar.php";
	$titulo = "Panel de Control - Listado de Productos";
	require "conexion.php";

	$sql = "SELECT
					prd_id, 
					prd_nombre,
					prd_descripcion,
					prd_precio,
					prd_foto1
			FROM 
					productos";
	$resultado = mysqli_query($link, $sql);
	$cantidad = mysqli_num_rows($resultado);
?>

<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<table id="panel" >

			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th>Imagen</th>
				<th colspan="2"><a href="form-alta.php"><img src="imgs/add.png" title="Agregar producto"/></a></th>
			</tr>
<?php

	while($fila = mysqli_fetch_array($resultado)){

?>			
			<tr>
				<td class="lista"><?php echo $fila["prd_nombre"]; ?></td>
				<td class="lista"><?php echo $fila["prd_descripcion"]; ?></td>
				<td class="lista"><?php echo $fila["prd_precio"]; ?></td>
				<td class="lista"><img src="imagenes/<?php echo $fila["prd_foto1"]; ?>" /></td>
				<!--- envia dato para borrar producto puntual --->
				<td class="lista">
					<a href="form-borrar.php?prd_id=<?php echo $fila["prd_id"] ?>">
						<img src="imgs/borrar2.png" title="Eliminar producto" />
					</a>
				</td>
				<td class="lista">
					<a href="form-editar.php?prd_id=<?php echo $fila["prd_id"] ?>">
					<img src="imgs/editar3.png" title="Modificar producto" />
				</td>
			</tr>
<?php

				}

?>
			<tr>
				<td class="pie centrar" colspan="4">Se han encontrado <?php echo $cantidad; ?> registros </td>
			</tr>
		</table>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>