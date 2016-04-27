<div class="container">


	<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8">
	  	<div class="panel panel-primary">
		  <div class="panel-heading">Ingresa los datos:</div>
		  <div class="panel-body">
		    
		  	<form role="form" method="POST" action="<?php echo base_url() ?>index.php?/Welcome/nuevoDepto">
			  
			  <div class="form-group">
			    <label for="latitud">Latitud</label>
			    <input type="text" class="form-control" id="latitud" name="latitud" required placeholder="Por ejemplo: 19.002321">
			  </div>
			  <div class="form-group">
			    <label for="longitud">Longitud</label>
			    <input type="text" class="form-control" id="longitud" name="longitud" required placeholder="Por ejemplo: -98.203102">
			  </div>

			  <div class="form-group">
			    <label for="precio">Precio</label>
			    <input type="number" class="form-control" id="precio" name="precio" required placeholder="$ MXN">
			  </div>

			  <div class="form-group">
			    <label for="imagen">Imagen</label>
			    <input type="file" id="imagen" name="imagen">
			  </div>
			  <div class="checkbox">
			    <label>
			    	<div><input type="checkbox" name="servicios[]" value="Agua"> Agua</div>
			    	<div><input type="checkbox" name="servicios[]" value="Telefono"> Teléfono</div>
			    	<div><input type="checkbox" name="servicios[]" value="Luz"> Luz</div>
			    	<div><input type="checkbox" name="servicios[]" value="Gas"> Gas</div>
			    	<div><input type="checkbox" name="servicios[]" value="Internet">Internet</div>
			      
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Subir</button>
			</form>


		  </div>
		</div>
	  </div>
	  <div class="col-md-2"></div>
	</div>
	

</div>