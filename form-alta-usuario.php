<?php
	include "validar.php";
	$titulo = "Panel de Control - Agregar Usuario";
	
	//REALIZAR CONEXION A DB TABLA DE USUARIOS CAMPO TIPO DE USUARIO
	
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
		<form action="alta-usu.php" method="post" enctype="multipart/form-data">
			<table id="paneles">
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="usu_nombre" id="usu_nombre" /></td>
				</tr>
				<tr>
					<td>Login</td>
					<td><input type="text" name="usu_login" id="usu_login" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="usu_clave" id="usu_clave" /></td>
				</tr>
				<tr>
					<td>Dirección</td>
					<td><input type="text" name="usu_dir" id="usu_dir" /></td>
				</tr>
				<tr>
					<td>Teléfono</td>
					<td><input type="text" name="usu_tel" id="usu_tel" /></td>
				</tr>
				<tr>
					<td>e-mail</td>
					<td><input type="text" name="usu_email" id="usu_email" /></td>
				</tr>
				<tr>
					<td>Tipo de usuario</td>
					<td><select></td>
				</tr>
<?php
	
	//while($fila = mysqli_fetch_array($resultado)){

?>
							<option value="<?php //echo $fila["cat_id"]; ?>"><?php //echo $fila["cat_nombre"]; ?></option>
<?php

												//}
						//mysqli_close($link);
						
?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Avatar</td>
					<td><input type="file" name="usu_foto" id="usu_foto" /></td>
				</tr>
								<tr>
					<td colspan="2" class="centrar"><input type="submit" value="Registrar usuario"  /></td>
				</tr>
			</table>
		</form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>