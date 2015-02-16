				<script>
					$(document).ready(function(){
						var valbojaca	= 0;
						var valcerca	= 0;
						var valfag		= 0;
						var valfon		= 0;
						var valbalsa	= 0;
						var valtiq 		= 0;
						var valyer 		= 0;
						var valurb 		= 0;	
						var resultado	= 0;
						$.valores = function(){
							if ($("#valboj").val()!="") 
							{
								valbojaca	=	parseInt($("#valboj").val());
								//alert("Bojaca validado");
							}
							else{
								valbojaca=0;
							}
							if ($("#valcerca").val()!="") 
							{
								valcerca	=	parseInt($("#valcerca").val());
								//alert("Cerca de Piedra validado");
							}
							else{
								valcerca = 0;
							};
							if ($("#valfag").val()!="") 
							{
								valfag		=	parseInt($("#valfag").val());
								//alert("Fagua validado");
							}
							else{
								valfag = 0;
							};
							if ($("#valfon").val()!="") 
							{
								valfon		=	parseInt($("#valfon").val());
								//alert("Fagua validado");
							}
							else{
								valfon = 0;
							};	
							if ($("#valbal").val()!="") 
							{
								valbalsa		=	parseInt($("#valbal").val());
								//alert("Fagua validado");
							}
							else{
								valbalsa = 0;
							};
							if ($("#valtiq").val()!="") 
							{
								valtiq		=	parseInt($("#valtiq").val());
								//alert("Fagua validado");
							}
							else{
								valtiq = 0;
							};	
							if ($("#valyer").val()!="") 
							{
								valyer		=	parseInt($("#valyer").val());
								//alert("Fagua validado");
							}
							else{
								valyer = 0;
							};
							if ($("#valurb").val()!="") 
							{
								valurb		=	parseInt($("#valurb").val());
								//alert("Fagua validado");
							}
							else{
								valurb = 0;
							};			
							resultado = valbojaca + valcerca + valfag + valfon + valbalsa + valtiq + valyer + valurb;
							$("#TotalZona").val(resultado);
						}
						$("#valboj").keyup(function(){
							$.valores();
						});
						$("#valcerca").keyup(function(){
							$.valores();
						});
						$("#valfag").keyup(function(){
							$.valores();
						});
						$("#valfon").keyup(function(){
							$.valores();
						});
						$("#valbal").keyup(function(){
							$.valores();
						});
						$("#valtiq").keyup(function(){
							$.valores();
						});
						$("#valyer").keyup(function(){
							$.valores();
						});
						$("#valurb").keyup(function(){
							$.valores();
						});

					});
				</script>
				<tr class="active">
					<th colspan="5">
						Ubicación Geográfica de la Población Beneficiada
					</th>
				</tr>
				<tr>
					<th colspan="2">Vereda</th>
					<th colspan="2">Vereda</th>
				</tr>
				<tr>
					<td>Bojacá:</td>
					<td><input name="valbojaca" type="text" class="form-control" id="valboj"  pattern="[0-9]*"></td>
					<td colspan="2">Cerca de Piedra:</td>
					<td><input name="valcerca" type="text" class="form-control" id="valcerca"></td>
				</tr>
				<tr>
					<td>Fagua:</td>
					<td><input name="valfag" type="text" class="form-control" id="valfag"></td>
					<td colspan="2">Fonquetá:</td>
					<td><input name="valfon" type="text" class="form-control" id="valfon"></td>
				</tr>
				<tr>
					<td>La Balsa:</td>
					<td><input name="valbalsa" type="text" class="form-control" id="valbal"></td>
					<td colspan="2">Tíquiza:</td>
					<td><input name="valtiqui" type="text" class="form-control" id="valtiq"></td>
				</tr>
				<tr>
					<td>Yerbabuena:</td>
					<td><input name="valyerba" type="text" class="form-control" id="valyer"></td>
					<td colspan="2">Zona Urbana:</td>
					<td><input name="valzonurb" type="text" class="form-control" id="valurb"></td>
				</tr>
				<tr>
					<td>Total: <input name="totalzon" type="text" id="TotalZona" class="form-control" disabled></td>
				</tr>