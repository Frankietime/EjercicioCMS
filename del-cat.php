<?php
	include "validar.php";
	$titulo = "Panel de control - Proyecto integrador";
	
	require "conexion.php";
	
	$cat_id = $_GET["cat_id"];
	$sql = "SELECT
					prd_nombre
			FROM
					productos
				WHERE
					cat_id=".$cat_id;
					
	$resultado = mysqli_query($link, $sql);
	$fila = mysqli_fetch_assoc($resultado);
	
if($fila["prd_nombre"] != null) {
	echo "todavia hay productos asociados a esta categoría";
} else echo "puede eliminar su categoría";
	
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
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>