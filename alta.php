<?php
	include "validar.php";
	$titulo = "Panel de control - Alta De Un Nuevo Producto";
	
	$prd_nombre = $_POST["prd_nombre"];
	$prd_descripcion = $_POST["prd_descripcion"];
	$prd_precio = $_POST["prd_precio"];
	$cat_id = $_POST["cat_id"];
	$prd_alta = date("Y-m-d");
	
	//1 - SUBIR IMAGENES AL SERVER: rutina para subir imagenes en carpeta imagenes
	
	$ruta = "imagenes/";
	
	$prd_foto1 = $_FILES["prd_foto1"]["name"];
	$prd_foto1_tmp = $_FILES["prd_foto1"]["tmp_name"];//captura el name y el tpm_name
		
	move_uploaded_file($prd_foto1_tmp/*ORIGEN*/, $ruta.$prd_foto1/*DESTINO*/);
	
	$prd_foto2 = $_FILES["prd_foto2"]["name"];
	$prd_foto2_tmp = $_FILES["prd_foto2"]["tmp_name"];
	
	move_uploaded_file($prd_foto2_tmp, $ruta.$prd_foto2);
	
	//2 - INSERTAR DATOS EN LA DB
	
	require "conexion.php";
	
	$sql = "INSERT INTO
					productos
						 	
					VALUES
					(
						NULL,
						'".$prd_nombre."',
						'".$prd_descripcion."',
						".$prd_precio.",
						".$cat_id.",
						'".$prd_alta."',
						'".$prd_foto1."',
						'".$prd_foto2."'
						)";
						//si no especifico los campos de la tabla productos inserto todos los VALUES en todos los CAMPOS en orden
						 //copiar todas las variables y luego ir viendo una por una que es y aplicar comillas segun corresponda
	
	mysqli_query($link, $sql);
	
	//chequeo si ejecuto el $sql con exito
	
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

	if($chequeo == 1){
		
	

?>
		<table id="panel" >

			<tr>
				<th colspan="2">SE HA AGREGADO UN NUEVO PRODUCTO</th>
			</tr>
		
			<tr>
				<th>Nombre</th>
				<td class="lista"><?php echo $prd_nombre; ?></td>
			</tr>
			<tr>
				<th>Descripcion</th>
				<td class="lista"><?php echo $prd_descripcion; ?></td>
			</tr>
			<tr>
				<th>Precio</th>	
				<td class="lista"><?php echo $prd_precio; ?></td>
			</tr>
			<tr>
				<th>Imagen</th>	
				<td class="lista"><img src="imagenes/<?php echo $prd_foto1; ?>" /></td>
			</tr>
		</table>
<?php

	} else 		echo "<div class='panel'>NO SE HA AGREGADO EL PRODUCTO</div>";
	
	mysqli_close($link);
	

?>	
	<br />
	<br />
	<a href="form-alta.php">AGREGAR OTRO PRODUCTO</a>
	<br />
	<br />
	<a href="panel-productos.php">VOLVER AL PANEL</a>	
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>


</body>
</html>