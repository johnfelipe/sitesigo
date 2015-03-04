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
					<th colspan="2">Producto Final</th>
				</tr>
				<tr>
					<td>Generar resolución para el pago de EPS subsidiadas para el cumplimiento del pago, para la garantìa de la prestacion de servicios de salud subsidiada </td>
					<td>02-Febrero</td>
					<td>31-Diciembre</td>
					<td colspan="2">Resolución generada por parte del Grupo de Aseguramiento en Salud para el pago de las EPS subsidiadas del Municipio de Chía</td>
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
				<tr>
					<td colspan="2"><strong>Programación Meses</strong></td>
					<td>
						<strong>Enero</strong> <input name="valorpre" type="checkbox"		value="Enero" 	class="form-control inpfec">
						<strong>Abril</strong> <input name="valorpre" type="checkbox"		value="Abril" 	class="form-control inpfec">
						<strong>Julio</strong> <input name="valorpre" type="checkbox"		value="Julio" 	class="form-control inpfec">
						<strong>Octubre</strong> <input name="valorpre" type="checkbox" 	value="Octubre" class="form-control inpfec">
					</td>
					<td>	
						<strong>Febrero</strong> <input name="valorpre" type="checkbox" 	value="Febrero" class="form-control inpfec">
						<strong>Mayo</strong> <input name="valorpre" type="checkbox" 		value="Mayo" 	class="form-control inpfec">
						<strong>Agosto</strong> <input name="valorpre" type="checkbox" 		value="Agosto" 	class="form-control inpfec">
						<strong>Noviembre</strong> <input name="valorpre" type="checkbox" 	value="Noviembre" class="form-control inpfec">
					</td>
					<td>
						<strong>Marzo</strong> <input name="valorpre" type="checkbox" 		value="Marzo" 		class="form-control inpfec">
						<strong>Junio</strong> <input name="valorpre" type="checkbox" 		value="Junio" 		class="form-control inpfec">
						<strong>Septiembre</strong> <input name="valorpre" type="checkbox" 	value="Septiembre" 	class="form-control inpfec">
						<strong>Diciembre</strong> <input name="valorpre" type="checkbox" 	value="Diciembre" 	class="form-control inpfec">
					</td>
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