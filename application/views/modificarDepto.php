<div class="container">


	<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8">
	  	<div class="panel panel-primary">
		  <div class="panel-heading">Modifica los datos:</div>
		  <div class="panel-body">
		    
		  	<form role="form" method="POST" action="<?php echo base_url() ?>index.php?/Welcome/modificarDepto">
			  
			  <div class="form-group">
			    <label for="latitud">Latitud</label>
			    <input type="text" class="form-control" id="latitud" name="latitud" required  value='<?echo($latitud)?>'>
			  </div>
			  <div class="form-group">
			    <label for="longitud">Longitud</label>
			    <input type="text" class="form-control" id="longitud" name="longitud" required value='<?echo($longitud)?>'>
			  </div>

			  <div class="form-group">
			    <label for="precio">Precio</label>
			    <input type="number" class="form-control" id="precio" name="precio" required value='<?echo($precio)?>'>
			  </div>

			  <div class="form-group">
			    <label for="imagen">Imagen</label>
			    <input type="file" id="imagen" name="imagen">
			  </div>
			  <div class="checkbox">
			    <label>
			    	<div><input type="checkbox" name="servicios[]" value="Agua" <? if($agua == 1){echo('checked');}; ?>> Agua</div>
			    	<div><input type="checkbox" name="servicios[]" value="Telefono" <? if($tel == 1){echo('checked');}; ?>> Teléfono</div>
			    	<div><input type="checkbox" name="servicios[]" value="Luz" <? if($luz == 1){echo('checked');}; ?>> Luz</div>
			    	<div><input type="checkbox" name="servicios[]" value="Gas" <? if($gas == 1){echo('checked');}; ?>> Gas</div>
			    	<div><input type="checkbox" name="servicios[]" value="Internet" <? if($internet == 1){echo('checked');}; ?>>Internet</div>
			      
			    </label>
			  </div>
			  <input type="hidden" name="id" value='<?echo($id)?>'>
			  <button type="submit" class="btn btn-primary">Modificar</button>
			</form>


		  </div>
		</div>
	  </div>
	  <div class="col-md-2"></div>
	</div>
	

</div>