<h1 class='page-header'>Programa: Aseguramiento</h1>
	<div class="row">
		<h3>Meta producto:</h3> 
		<p class="lead">
			VINCULAR A UN 50% DURANTE EL CUATRIENIO EL NÚMERO DE PERSONAS SIN ASEGURAMIENTO (IDENTIFICADAS) 
			EN SALUD AL SISTEMA GENERAL DE SEGURIDAD SOCIAL EN SALUD (2.533 PERSONAS NO AFILIADAS).
		</p>
	</div>
	<form name"FormPer" method="POST" action="">
		<table class="table">
			<thead>
				<tr class="active">
					<th colspan="5">
						Componente Físico MES -
						<strong>
							<script>
								var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
								var f=new Date();
								document.write(meses[f.getMonth()]);
							</script>
						</strong>
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
						NÚMERO DE PERSONAS VINCULADAS AL SGSSS
					</td>
					<td colspan="2">
						1267
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
					<td colspan="3">Afiliación al régimen subsidiado - continuidad</td>
				</tr>
				<tr>
					<th>Estrategia / Actividad</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Producto Final</th>
					<th class="success">Cumple</th>
				</tr>
				<tr>
					<td>Generar resolución para el pago de EPS subsidiadas para el cumplimiento del pago, para la garantìa de la prestacion de servicios de salud subsidiada </td>
					<td>02-Febrero</td>
					<td>31-Diciembre</td>
					<td>Resolución generada por parte del Grupo de Aseguramiento en Salud para el pago de las EPS subsidiadas del Municipio de Chía</td>
					<td>
						<select name="cumple" id="" class="form-control">
							<option value="1">Si</option>
							<option value="2">No</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Responsable:</th>
					<td colspan="4">Adriana Borrero</td>
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
					<td colspan="2">FOSYGA</td>
					<td>$711.601.823</td>
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