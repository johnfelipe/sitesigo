
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
			$("#valbojaca").onChange(function () {
				//saco el valor accediendo a un input de tipo text y name = valbojaca y lo asigno a uno con name = totalzon 
			$("#totalzon").val($("#valbojaca").val());
		});	
	</script>
	<h1 class='page-header'>Programa: Aseguramiento</h1>
	<div class="row">
		<h3>Meta producto:</h3> 
		<p class="lead">
			REALIZAR ANUALMENTE UN MONITOREO DE AFILIACIÓN AL SGSSS.
		</p>
	</div>
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
						NUMERO DE MONITOREOS REALIZADOS
					</td>
					<td colspan="2">
						1
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
					<td colspan="2">FORTALECIMIENTO DEL ASEGURAMIENTO EN EL MUNICIPIO DE CHÍA</td>
					<td colspan="3">0.4% Interventoria del régimen subsidiado</td>
				</tr>
				<tr>
					<th>Estrategia / Actividad</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Producto Final</th>
					<th class="success">Cumple</th>
				</tr>
				<tr>
					<td>Cruce de Bases de datos del Régimen Subsidiado en Salud </td>
					<td>02-Febrero</td>
					<td>31-Diciembre</td>
					<td>Proceso de depuración de base de datos del régimen subsidiado en salud</td>
					<td>
						<select name="cumple" id="" class="form-control">
							<option value="1">Si</option>
							<option value="2">No</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Responsables:</th>
					<td colspan="2">Adriana Borrero - Fernando Rodríguez</td>
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
					<td>$70.000.000</td>
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