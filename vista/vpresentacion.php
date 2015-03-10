<?php  
    $foto = isset($_SESSION["imagen"]) ? $_SESSION["imagen"]:NULL;
?>
<h1 class="page-header">Bienvenido a SITESIGO-WEB!!</h1>
	<div class="container-fluid">
		<div class="row">
		  	<div class="col-xs-4 col-sm-3">
		    	<img src="img/logo.jpg" class="img-responsive" alt="SITESIGO">
		  	</div>
		  	<div class="col-xs-4 col-sm-3">
			    <h2>Menu Inicial</h2>
			    <div class="row">
			    	<div class="col-lg-12 margen">
				    	<a href="home.php?var=vpdm" class="btn btn-success font">Plan de Desarrollo Municipal</a>
				    </div>
				</div>
				<div class="row">    
					<div class="col-lg-12 margen">
				    	<a href="docs/plan_indicativo.xls" class="btn btn-success font">Descargar Plan Indicativo Cuatrienal</a>
				    </div>
				</div>
				<div class="row">    
				    <div class="col-lg-12 margen">
				    	<a href="home.php?var=vpa2015" class="btn btn-success font">Plan de accion 2015</a>
				    </div>
				</div>
				<div class="row">    
				    <div class="col-lg-12 margen">
				    	<a href="docs/poai.pdf" target="_blank" class="btn btn-success font">Plan operativo anual de inversiones</a>
				    </div>
				</div>    
				<div class="row">
					<div class="col-lg-12 margen">	
				    	<a href="home.php?var=vindicedesem" class="btn btn-success font">Indice de desempeño Integral</a>
				    </div>
				</div>    
				<div class="row">    
				    <div class="col-lg-12 margen">	
				    	<a href="home.php?var=vinfcuatri" class="btn btn-success font">Información del cuatrienio</a>
			    	</div>
			    </div>
			</div>
			<div class="col-xs-4 col-sm-3">

				<div class="foto">
					<label for="Usuarios">Bienvenid@:<br> <?php echo $usuario; ?> </label>
					<img src="<?php echo $foto; ?>" class="img-circle" alt="Foto" width="150px" height="170px">  	
				</div>
			</div>
		</div>
	</div>