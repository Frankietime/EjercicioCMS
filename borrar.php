<?php
	include "validar.php";
	$titulo = "Se ha realizado la baja con éxito";
	require "conexion.php";
	$prd_id = $_POST['prd_id'];
	$sql = "DELETE FROM productos
					WHERE prd_id =".$prd_id;
	mysqli_query($link, $sql);
	$chequeo = mysqli_affected_rows($link);
	echo $chequeo;
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
		<div align="center"><a href="panel-productos.php">Regresar al panel de productos</a></div>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>