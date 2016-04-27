
<div class="container">

	<div class="panel panel-primary">
		 <div class="panel-heading">Introduce tus datos:</div>
  		<div class="panel-body">
    
  				<form name="loginForm" method="POST" action="<?php echo base_url() ?>index.php?/Welcome/logueo">

				  <div class="form-group">
				    <label for="usuario">Usuario</label>
				    <input type="text" class="form-control" id="usuario"
				           name="usuario" placeholder="Introduce tu usuario" required>
				  </div>
				  <div class="form-group">
				    <label for="password">Contraseña</label>
				    <input type="password" class="form-control" id="password" 
				           name="password" placeholder="Contraseña" required>
				  </div>
				  <div class="form-group">

				  	<button type="submit" class="btn btn-primary">Ingresar</button>
				  	<button type="reset" class="btn btn-warning">Reset</button>
				  	
				  </div>
	  
				</form>

				

  		</div>
	</div>

</div>