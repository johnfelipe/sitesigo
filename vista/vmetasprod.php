	<?php require 'controlador/cmetasprod.php'; ?>
	<h1 class='page-header'>SECTOR <?php echo $sector[0]['nomsec']; ?></h1>
	<?php
		for ($i=0; $i <count($programas) ; $i++) 
		{ 
	?>
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><strong>PROGRAMA: <?php echo $programas[$i]['nomprog']; ?></strong></div>
				<div class="panel-body">
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					    Metas Producto <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="home.php?var=2">Meta producto 1</a></li>
					    <li><a href="home.php?var=3">Meta producto 2</a></li>
					    <li><a href="home.php?var=4">Meta producto 3</a></li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		} 
	?>