<?php
	include "validar.php";
	$titulo = "Panel de Control - Modificar Producto";
	//PROCESOS
	require "conexion.php";
	$sql = "SELECT
					cat_id, cat_nombre
			FROM
					categorias";
	$prd_id = $_GET["prd_id"];
	
	$sql1 = "SELECT 
					
					prd_nombre,
					prd_descripcion,
					prd_precio,
					prd_foto1,
					prd_foto2,
					cat_id 
			FROM
					productos
				WHERE prd_id=".$prd_id;
				//die($sql1);
				
	$resultado = mysqli_query($link, $sql);
	$resultado1 = mysqli_query($link, $sql1);
	
	$fila1 = mysqli_fetch_assoc($resultado1);
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

		<form action="editar.php" method="post" enctype="multipart/form-data">
			<table id="paneles">
				<tr>
					<td>Nombre</td>
					<td><input type="text" value="<?php echo $fila1["prd_nombre"]; ?>" name="prd_nombre" id="prd_nombre" /></td>
				</tr>
				<tr>
					<td>Descripcion</td>
					<td><textarea name="prd_descripcion" id="prd_descripcion" rows="6"><?php echo $fila1["prd_descripcion"]; ?></textarea></td>
				</tr>
				<tr>
					<td>Precio</td>
					<td><input type="text" value="<?php echo $fila1["prd_precio"]; ?>" name="prd_precio" id="prd_precio" /></td>
				</tr>
				<tr>
					<td>Categoria</td>
					<td><select id="cat_id" name="cat_id">
<?php
	
	while($fila = mysqli_fetch_array($resultado)){

?>							<!--- COMPARO $fila["cat_id"] y $fila1["cat_id"]--->
							<option <?php if($fila["cat_id"] == $fila1["cat_id"]) { echo "selected"; } ?>
								value="<?php echo $fila["cat_id"]; ?>"><?php echo $fila["cat_nombre"]; ?></option>
<?php

												}
						mysqli_close($link);
						
?>
						</select>
					</td>
				</tr>
				<tr>
					<td>ACTUAL</td>
					<td class="lista"><img src="imagenes/<?php echo $fila1["prd_foto1"]; ?>"</td>
				</tr>
				<tr>
					<td>Miniatura</td>
					<td><input type="file" name="prd_foto1" id="prd_foto1" /></td>
				</tr>
				<tr>
					<td>Ampliada</td>
					<td><input type="file" name="prd_foto2" id="prd_foto2" /></td>
				</tr>
				<tr>
					<td colspan="2" class="centrar">
						<input type="submit" value="Modificar producto"  />
						<input type="hidden" id="prd_id" name="prd_id" value="<?php echo $prd_id; ?>" />
					</td>
				</tr>
			</table>
		</form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>