<?php
	include "validar.php";
	$titulo = "Modificiacion de los datos de un producto";
	//Rutina para subir imagenes SI se enviaron
	$ruta="imagenes/";
	
	$subir_fotos;//permite almacenar en una variable los nombres de las fotos para subir
					//en la DB. Al poner un valor vacio evita un condicional que chequee si
					//fueron capturadas las variables $prd_foto1 y $prd_foto2
	//$coma="";		//permite agregar una coma luego de prd_foto1 si se catpura prd_foto2
	if($_FILES["prd_foto1"]["name"] != ""){
		$prd_foto1 = $_FILES["prd_foto1"]["name"];
		$prd_foto1_tmp = $_FILES["prd_foto1"]["tmp_name"];
		move_uploaded_file($prd_foto1_tmp, $ruta.$prd_foto1);
		$subir_fotos = ", prd_foto1='".$prd_foto1."'";
		$coma = ", ";
		}
	if($_FILES["prd_foto2"]["name"] != ""){
		$prd_foto2 = $_FILES["prd_foto2"]["name"];
		$prd_foto2_tmp = $_FILES["prd_foto2"]["tmp_name"];
		move_uploaded_file($prd_foto2_tmp, $ruta.$prd_foto2);
		$subir_fotos = $subir_fotos.", prd_foto2='".$prd_foto2."'";
		} 
	
	
	//Rutina de modificacion de datos
	
	$prd_id = $_POST["prd_id"];
	$prd_nombre = $_POST["prd_nombre"];
	$prd_descripcion = $_POST["prd_descripcion"];
	$prd_precio = $_POST["prd_precio"];
	$cat_id = $_POST["cat_id"];
	$prd_alta = date("Y-m-d");
	require 'conexion.php';
	$sql = "UPDATE 
					productos
						 	
					SET
					
						prd_nombre='".$prd_nombre."',
						prd_descripcion='".$prd_descripcion."',
						prd_precio=".$prd_precio.",
						cat_id=".$cat_id.",
						prd_alta='".$prd_alta."'".$subir_fotos."
						
					WHERE
						prd_id=".$prd_id;
				
	//die($sql);
	
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
		<!-- inicio del desarrollo 
		<table id="paneles">
			<tr>
				<th colspan="2">SE HA MODIFICADO EL SIGUIENTRE </th>
			</tr>
			<tr>
				<th>Nombre</th>
				<td class="lista"><?php echo $prd_nombre; ?></td>
			</tr>
			</tr>
			<tr>
				<th>Descripción</th>
				<td class="lista"><?php echo $prd_descripcion; ?></td>
			</tr>
			</tr>
			<tr>
				<th>Precio</th>
				<td class="lista"><?php echo $prd_precio; ?></td>
			</tr>
			</tr>
			<tr>
				<th>Miniatura</th>
				<td class="lista"><img src="imagenes/<?php echo $prd_foto1; ?>"</td>
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
</table>--->
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>