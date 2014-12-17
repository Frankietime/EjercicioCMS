<?php
	include "validar.php";
	$titulo = "Panel de Control - Listado de Categorías";
	require "conexion.php";
	
	$sql = "SELECT
					cat_id, cat_nombre
			FROM
					categorias";
	$resultado = mysqli_query($link, $sql);
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
		<table id="panel">
			<tr>
				<th>id</th>
				<th>Categoría</th>
				<th colspan="2"><a href="form-alta-cat.php"><img src="imgs/add.png" title="Agregar categoría" /></a></th>
			</tr>
<?php

	while($fila = mysqli_fetch_array($resultado))	{

?>
			<tr>
				<td class="lista"><?php echo $fila["cat_id"] ?></td>
				<td class="lista"><?php echo $fila["cat_nombre"] ?></td>
				<td class="lista"><a href="del-cat.php?cat_id=<?php echo $fila["cat_id"]; ?>">
						<img src="imgs/borrar2.png" title="Eliminar categoría" />
							</a>
				</td>
				<td class="lista"><img src="imgs/editar3.png" title="Editar categoría" /></td>
			</tr>
<?php

													}
	mysqli_close($link);
?>
		</table>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>