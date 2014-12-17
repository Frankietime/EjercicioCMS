<?php
	$titulo = "Panel de control - Proyecto integrador";
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
		<form action="contacto.php" method="post">
			<div id="panel">
			<table id="paneles">
				<tr>
					<th colspan="2">INGRESE SU CONSULTA</th>
				</tr>
				<tr>
					<th>Nombre</th>
					<td class="lista"><input type="text" name="nombre" id="nombre" /></td>
				</tr>
				<tr>
					<th>e-mail</th>
					<td class="lista"><input type="text" name="email" id="email" /></td>
				</tr>
				<tr>
					<th>Consulta</th>
					<td class="lista"><textarea name="consulta" id="consulta"></textarea></td>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" value="Enviar" /></th>
				</tr>
			</table>
			</div>
			
		</form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>