	<?php
		include("controlador/cusuario.php");  
	?>
	<div class="forms1">
		<h1 class='page-header'>Mi perfil</h1>
		<table class="table">
			<thead>
				<th>Número de documento</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Perfil</th>
				<th>Foto</th>
			</thead>
			<?php
				for ($i=0; $i<count($datusu); $i++) 
				{  
			 ?>
			<tr>
				<td><?php echo $datusu[$i]['documento']; ?></td>
				<td><?php echo $datusu[$i]['nombre']; ?></td>
				<td><?php echo $datusu[$i]['email']; ?></td>
				<td><?php echo $datusu[$i]['nomper']; ?></td>
				<td>
					<div class="foto2">
						<img src="<?php echo $datusu[$i]['foto']; ?>" class="img-circle" alt="Foto" width="130px" height="130px">
					</div>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<a href="home.php" class="btn btn-primary">Salir</a>
	</div>