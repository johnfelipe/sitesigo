
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
			$("#valbojaca").onChange(function () {
				//saco el valor accediendo a un input de tipo text y name = valbojaca y lo asigno a uno con name = totalzon 
			$("#totalzon").val($("#valbojaca").val());
		});	
	</script>
	<h1 class='page-header'>Programa: Prestación y Desarrollo de los Servicios de Salud</h1>
	<div class="row">
		<h3>Meta producto:</h3> 
		<p class="lead">
			IMPLEMENTAR AL 100% EL "OBSERVATORIO DE SALUD MUNICIPAL" PARA VIGILAR LA CALIDAD Y OPORTUNIDAD EN LA PRESTACIÓN DE SERVICIOS DE LA ESE HOSPITAL SAN ANTONIO DE CHIA  Y TODOS LOS ACTORES DEL SISTEMA DE SALUD EN EL MUNICIPIO, DURANTE EL CUATRIENIO
		</p></div>
	<form name"FormPer" method="POST" action="">
		<table class="table">
			<thead>
				<tr class="active">
					<th colspan="5">
						Componente Físico
					</th>
				</tr>	
				<tr>
					<th colspan="2">Indicador</th>
					<th colspan="2">Valor Programado 2015</th>
					<th class="success">Valor Ejecutado</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="2">
						PORCENTAJE DE IMPLEMENTACIÓN DEL OBSERVATORIO DE SALUD MUNICIPAL
					</td>
					<td colspan="2">
						25
					</td>
					<td>
						<input name="valoreje" type="text" class="form-control">
					</td>
				</tr>
				<tr>
					<th colspan="2">Proyecto</th>
					<th colspan="3">Componente</th>
				</tr>
				<tr>
					<td colspan="2">FORTALECIMIENTO DE LA PRESTACIÓN Y DESARROLLO DE LOS SERVICIOS DE SALUD</td>
					<td colspan="3">Gestión operativa y funcional</td>
				</tr>
				<tr>
					<th>Estrategia / Actividad</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Producto Final</th>
					<th class="success">Cumple</th>
				</tr>
				<tr>
					<td>Acciones para el fortalecimiento del observatorio de salud y de la prestación del servicio en la ESE Hospital San Antonio de Chía</td>
					<td>02-Febrero</td>
					<td>31-Diciembre</td>
					<td>Seguimiento y evaluación de Variables de calidad, oportunidad y accesibilidad sobre la prestación del servicio de salud</td>
					<td>
						<select name="cumple" id="" class="form-control">
							<option value="1">Si</option>
							<option value="2">No</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Responsables:</th>
					<td colspan="2">Secretario de Salud - Adriana Barrero - Claudia Izquierdo - Carlos Parra</td>
				</tr>
				<tr class="active">
					<th colspan="5">
						Componente Económico
					</th>
				</tr>	
				<tr>
					<th colspan="3">Recursos Apropiados para la Vigencia</th>
					<th colspan="2"> Recursos ejecutados</th>
				</tr>
				<tr>
					<th colspan="2">Fuente</th>
					<th colspan="3">Valor Apropiado</th>
				</tr>
				<tr>
					<td colspan="2">Libre Asignación</td>
					<td>$215.088.633</td>
					<td><input name="valorpre" type="text" class="form-control"></td>
				</tr>
				<?php 
					include('vista/vrecurgestion.php'); 
				?>
				<?php 
					include('vista/vcomp.php'); 
				?>
			</tbody>
		</table>
	</form>