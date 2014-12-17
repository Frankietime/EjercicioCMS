<?php
	include "validar.php";
	$titulo = "HALT!!! CONFIRMACION DE UN PRODUCTO";
	$prd_id = $_GET["prd_id"];
	
	require "conexion.php";
	
	
	$sql = "SELECT	
    				prd_nombre,
    				prd_descripcion,
    				prd_precio,
    				prd_foto1
    		FROM	
    				productos
    			WHERE
    				prd_id =".$prd_id;
					
				
					
	$resultado = mysqli_query($link, $sql);
	$fila = mysqli_fetch_assoc($resultado);
	mysqli_close($link);
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
		<form action="borrar.php" method="post" onsubmit="return confirmarBaja()">
		<table id="paneles">
			<tr>
				<th colspan="2">SE ELIMINARA EL SIGUIENTE PRODUCTO</th>
			</tr>
			<tr>
				<th>Nombre</th>
				<td class="lista"><?php echo $fila["prd_nombre"]; ?></td>
			</tr>
			</tr>
			<tr>
				<th>Descripción</th>
				<td class="lista"><?php echo $fila["prd_descripcion"]; ?></td>
			</tr>
			</tr>
			<tr>
				<th>Precio</th>
				<td class="lista"><?php echo $fila["prd_precio"]; ?></td>
			</tr>
			</tr>
			<tr>
				<th>Miniatura</th>
				<td class="lista"><img src="imagenes/<?php echo $fila["prd_foto1"]; ?>"</td>
			</tr>
			<tr>
				<th colspan="2">
						<input type="hidden" id="prd_id" name="prd_id" value="<?php echo $prd_id; ?>" />
						<input type="submit" value="CONFIRMAR BAJA" />
					
				</th>
			</tr>
			<tr>
				<th colspan="2"><a href="panel-productos.php">Volver al panel de productos</a></th>
			</tr>
		</table>
		</form>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	<script type="text/javascript" src="funciones.js">
		
	</script>
</body>
</html>