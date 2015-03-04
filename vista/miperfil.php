	<?php
		include("controlador/cusuario.php");  
    	$foto = isset($_SESSION["imagen"]) ? $_SESSION["imagen"]:NULL;
	?>
	<div class="forms1">
		<h1 class='page-header'>Mi perfil</h1>
		<table class="table">
			<thead>
				<th>Número de documento</th>
				<th>Nombre</th>
				<th>Perfil</th>
				<th>Foto</th>
			</thead>
			<tr>
				<td valign="middle"><?php echo $usuario; ?></td>
				<td valign="middle"><?php echo $datusu1[0]['nombre']; ?></td>
				<td><?php echo $datusu1[0]['nomper']; ?></td>
				<td>
					<div class="foto2">
						<img src="<?php echo $foto; ?>" class="img-circle" alt="Foto" width="130px" height="130px">
					</div>
				</td>
			</tr>
		</table>
		<a href="home.php?var=25" class="btn btn-primary">Cambiar contraseña</a>
		<a href="home.php" class="btn btn-primary">Salir</a>
	</div>