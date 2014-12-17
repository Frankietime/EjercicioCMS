<?php
	include "validar.php";
	$titulo = "Panel de control - Administración de Usuarios";
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
		<table id="panel">
			<tr>
				<th colspan="3">ESTADISTICAS</th>
			</tr>
			<tr>
				<th>TOTAL DE USUARIOS REGISTRADOS</th>
				<th>MEJOR CLIENTE</th>
				<th>ARTICULO MÁS VISITADO</th>
			</tr>
			<tr>
				<td class="lista">total<?php  ?></td>
				<td class="lista">IMAGEN CLIENTE<?php  ?></td>
				<td class="lista">articulo<?php  ?></td>
			</tr>
		</table>
		<br />
		<br />
		<table id="panel">
			<tr>
				<th colspan="8">USUARIOS REGISTRADOS</th>
			</tr>
			<tr>
				<th>Avatar</th>
				<th>Nombre</th>
				<th>Dirección</th>
				<th>Teléfono</th>
				<th>e-mail</th>
				<th>Tipo de usuario</th>
				<th colspan="2"><a href="form-alta-usuario.php"><img src="imgs/Add3.png" title="Agregar usuario" /></a></th>
			</tr>
<?php

	//COMIENZA LISTA DE USUARIOS
	
	
?>
			<tr>
				<td class="lista">IMAGEN DE USUARIO</td>
				<td class="lista">nombre<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">dirección<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">teléfono<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">e-mail<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">tipo de usuario<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista" align="center"><a><img src="imgs/Write.png" title="Enviar mensaje" /></a></td>
				<td class="lista" align="center"><a><img src="imgs/borrar2.png" title="Eliminar usuario" /></a></td>
			</tr>
<?php

	//FINALIZA LISTA DE USUARIOS

?>
		</table>
		<br />
		<br />
				<table id="panel">
			<tr>
				<th colspan="6">ULTIMAS COMPRAS</th>
			</tr>
			<tr>
				<th>Avatar</th>
				<th>Usuario</th>
				<th>Tipo de usuario</th>
				<th>Artículo</th>
				<th>Cantidad</th>
				<th>Gasto</th>
			</tr>
<?php

	//COMIENZA LISTA DE USUARIOS
	
	
?>
			<tr>
				<td class="lista">IMAGEN DEL USUARIO</td>
				<td class="lista">usuario<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">tipo de usuario<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">articulo comprado<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">cantidad<?php //RESULTADO BASE DE DATOS  ?></td>
				<td class="lista">$<?php //RESULTADO BASE DE DATOS  ?></td>
			</tr>
			<tr>
				<th colspan="6">VER TODAS LAS COMPRAS</th>
			</tr>
<?php

	//FINALIZA LISTA DE USUARIOS

?>
		</table>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>