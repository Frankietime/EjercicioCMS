<?php //Conviene separar secciones de codigo (procesos por un lado, vistas por el otro) para acostumbrarse al metodo de trabajo Orientado a Objetos
	include "validar.php";
	$titulo = "Panel de control - Proyecto integrador";
	require "conexion.php";
	$buscar = $_POST["buscar"];
	//inicio - condiciones
	$categoria = $_POST["cat_id"];//cat_nombre devuelve el cat_id porque cat_nombre es el texto en <option> dentro de buscador.php cuyo value es cat_id
								  //cat_id es la PRIMARY KEY y me permite recorrer todas las tablas relacionadas a ese ID
	//fin - condiciones
	$sql = "SELECT
					prd_nombre,
					prd_descripcion,
					prd_precio,
					prd_foto1,
					cat_id
				
			FROM 
					productos
					
			WHERE 	cat_id = ".$categoria." 
			
			   AND
					prd_nombre
					
					
					LIKE '%".$buscar."%'"; //% = si tiene algo antes o despues lo debe buscar tambien, % es comodin
										   // ' = es string
										   // se genera dinamicamente el contenido de una busqueda SQL
										   // si no se separa la variable de la string el sistema barre nuevamente desde la barrida de manejo de memoria
					 
			
	$resultado = mysqli_query($link, $sql);
	//$cantidad = mysqli_num_rows($resultado);
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

		<table id="panel" >

			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th>Imagen</th>
				<th>Categoría</th>
			</tr>
<?php

	while($fila = mysqli_fetch_array($resultado)){

?>			
			<tr>
				<td class="lista"><?php echo $fila["prd_nombre"]; ?></td>
				<td class="lista"><?php echo $fila["prd_descripcion"]; ?></td>
				<td class="lista"><?php echo $fila["prd_precio"]; ?></td>
				
				<td class="lista"><img src="imagenes/<?php echo $fila["prd_foto1"]; ?>" /></td>
				<!---<td class="lista"><?php echo $fila["cat_id"]; ?></td>--->
			</tr>
<?php

				}
mysqli_close($link);
?>
			<tr>
				<td class="pie centrar" colspan="4">Se han encontrado<!--- <?php echo $cantidad; ?> registros ---></td>
			</tr>
		</table>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>