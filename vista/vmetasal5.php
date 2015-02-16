
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function(){
			$("#valbojaca").onChange(function () {
				//saco el valor accediendo a un input de tipo text y name = valbojaca y lo asigno a uno con name = totalzon 
			$("#totalzon").val($("#valbojaca").val());
		});	
	</script>
	<h1 class='page-header'>Programa: Salud Pública</h1>
	<div class="row">
		<h3>Meta producto:</h3> 
		<p class="lead">
			IMPLEMENTAR EL PLAN OPERATIVO DEL PROGRAMA AMPLIADO DE INMUNIZACIONES - PAI  QUE VINCULE A 7.934 NIÑOS Y NIÑAS DE 0 A 5 AÑOS, CON ESQUEMA DE VACUNACIÓN
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
						NUMERO DE NIÑOS MENORES DE 5 AÑOS VACUNADOS
					</td>
					<td colspan="2">
						7934
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
					<td colspan="2">PROMOCIÓN, PREVENCIÓN, VIGILANCIA Y CONTROL EN SALUD PÚBLICA EN EL MUNICIPIO DE CHÍA</td>
					<td colspan="3">Salud infantil</td>
				</tr>
				<tr>
					<th>Estrategia / Actividad</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Producto Final</th>
					<th class="success">Cumple</th>
				</tr>
				<tr>
					<td>Aunar esfuerzos para desarrollar las acciones programadas en el Plan de Intervenciones Colectivas PIC 2015 - PAI</td>
					<td>15-Enero</td>
					<td>15-Diciembre</td>
					<td>Coberturas útiles en esquema básico de vacunación</td>
					<td>
						<select name="cumple" id="" class="form-control">
							<option value="1">Si</option>
							<option value="2">No</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Responsables:</th>
					<td colspan="2">Carlos Parra - Johana Ramírez - Equipo PIC</td>
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
					<td colspan="2">SGP</td>
					<td>$146.457.906</td>
					<td><input name="valorpre" type="text" class="form-control"></td>
				</tr>
				<?php 
					include('vista/vcaracpob.php'); 
				?>
				<?php 
					include('vista/vubicgeo.php'); 
				?>
				<?php 
					include('vista/vrecurgestion.php'); 
				?>
				<?php 
					include('vista/vcomp.php'); 
				?>
			</tbody>
		</table>
	</form>