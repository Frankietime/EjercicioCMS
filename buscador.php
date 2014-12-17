<?php
	include "validar.php";
	$titulo = "Panel de control - Buscador";
	require "conexion.php";
	
	$sql = "SELECT
				cat_nombre,
				cat_id
			FROM
				categorias";
				
	$resultado = mysqli_query($link, $sql)
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
		
		Ingrese criterio de búsqueda
		<form action="resultado.php" method="post">
			<input type="text" id="buscar" name="buscar" />
			<input type="submit" value="BUSCAR" />
			<select name="cat_id" id="cat_id">
<?php

			while($fila = mysqli_fetch_array($resultado)) {

?>
<!--- cat_id es la PRIMARY KEY y me permite recorrer todas las tablas relacionadas a ese ID --->
				<option value="<?php echo $fila["cat_id"]; ?>"><?php echo $fila["cat_nombre"] ?></option>
<?php

			
														}
	mysqli_close($link);
?>
			</select>
		</form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>