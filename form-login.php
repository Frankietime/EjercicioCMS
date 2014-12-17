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
		
		
			<br />
			<form action="login.php" method="post">
				<table id="paneles">
					<tr>
						<th colspan="2">LOGIN</th>
					</tr>
					<tr>
						<td>
							USUARIO
						</td>
						<td>
							<input type="text" placeholder="Usuario..." id="usu_login" name="usu_login" />
						</td>
					</tr>
					<tr>
						<td>
							PASSWORD
						</td>
						<td>
							<input type="password" placeholder="Password..." id="usu_clave" name="usu_clave" />
						</td>
					</tr>
					<tr>
						<th colspan="2">
							<input type="submit" value="Login" />
						</th>
					</tr>
				</table>
	<div id="error">
		<?php 
			if(isset($_GET["login"])){
				$login = $_GET["login"];
				if($login == 0){
				echo "USUARIO Y/O CLAVE INCORRECTOS";
				} elseif($login == 2){
					echo "HA INTENTADO INGRESAR POR BACKDOOR. ESTE EVENTO SERÁ REPORTADO";
				}
			}
		?>
	</div>
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>