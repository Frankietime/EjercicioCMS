<?php
	include "validar.php";
	$titulo = "Modificiacion de los datos de un producto"; //Nuevo operador
	//Rutina para subir imagenes SI se enviaron
	$ruta="imagenes/";
	
	//Rutina de modificacion de datos
	
	$prd_id = $_POST["prd_id"];
	$prd_nombre = $_POST["prd_nombre"];
	$prd_descripcion = $_POST["prd_descripcion"];
	$prd_precio = $_POST["prd_precio"];
	$cat_id = $_POST["cat_id"];
	$prd_alta = date("Y-m-d");
	
	if($_FILES["prd_foto1"]["name"] != ""){
		$prd_foto1 = $_FILES["prd_foto1"]["name"];
		$prd_foto1_tmp = $_FILES["prd_foto1"]["tmp_name"];
		move_uploaded_file($prd_foto1_tmp, $ruta.$prd_foto1);

		}
	if($_FILES["prd_foto2"]["name"] != ""){
		$prd_foto2 = $_FILES["prd_foto2"]["name"];
		$prd_foto2_tmp = $_FILES["prd_foto2"]["tmp_name"];
		move_uploaded_file($prd_foto2_tmp, $ruta.$prd_foto2);
		
		} 
	
	require 'conexion.php';
	$sql = "UPDATE 
					productos
						 	
					SET
					
						prd_nombre='".$prd_nombre."',
						prd_descripcion='".$prd_descripcion."',
						prd_precio=".$prd_precio.",
						cat_id=".$cat_id;
						
	if(isset($prd_foto1)) {
		$sql .= ", prd_foto1='".$prd_foto1."'";
	}
	
	if(isset($prd_foto2)) {
		$sql .= ", prd_foto2='".$prd_foto2."'";
	}
	
	$sql .= " WHERE
					prd_id=".$prd_id;//PONER ESPACIO ANTES DEL WHERE PARA QUE NO QUEDE PEGADO AL VALOR ANTERIOR!!!
	
	//die($sql);
	
	mysqli_query($link, $sql);
	$chequeo = mysqli_affected_rows($link);
	
	$sql_foto1 = "SELECT
					prd_foto1
			FROM
					productos
				WHERE
					prd_id=".$prd_id;
					
	//die($sql_foto1);
					
	$resultado = mysqli_query($link, $sql_foto1);
	$fila = mysqli_fetch_assoc($resultado);
	print_r($fila);

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
<?php 	
	
	if($chequeo == 0){
		echo "NO SE HA MODIFICADO NINGUN PRODUCTO";
	} else {
		
	 
?>
		<!-- inicio del desarrollo --->
		<form action="form-editar.php" method="get">
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
				<td class="lista">
					<img src="imagenes/
						<?php echo $fila["prd_foto1"];//no ["name"] porque esto pertenece al array de imagen capturada no al de consulta
				 		 ?>" /></td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="hidden" name="prd_id" id="prd_id" value="<?php echo $prd_id; ?>" />
					<input type="submit" value="Modificar nuevamente" />
					
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
	
</body>
</html>

<?php

	}

?>