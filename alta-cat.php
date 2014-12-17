<?php
	include "validar.php";
	$titulo = "Panel de control - Agregar Categorías";
	
	$cat_nombre = $_POST["cat_nombre"];
	
	require "conexion.php";
	$query = "INSERT INTO
						categorias
						
				VALUES (
					NULL,
					'".$cat_nombre."'
					)";
					
					
	mysqli_query($link, $query);
	$chequeo = mysqli_affected_rows($link);				
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
<?php

	if($chequeo == 1) {

?>
		
	<table id="panel" >

			<tr>
				<th colspan="2">SE HA AGREGADO UNA NUEVA CATEGORÍA</th>
			</tr>
			<tr>
				<th>Nombre</th>
				<td class="lista"><?php echo $cat_nombre; ?></td>
			</tr>
		</table>	
		
<?php

	} else echo "<div class='panel'>NO SE HA AGREGADO NINGUNA CATEGORÍA</div>";
mysqli_close($link);
?>		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>