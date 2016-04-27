<div class="container">


	<div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8">
	  	<div class="panel panel-primary">
		  <div class="panel-heading">Ingresa tus datos:</div>
		  <div class="panel-body">
		    
		  	<form role="form" method="POST" action="<?php echo base_url() ?>index.php?/Welcome/nuevaPersona">
			  
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
			  </div>

			  <div class="form-group">
			    <label for="apellido">Apellidos</label>
			    <input type="text" class="form-control" id="apellido" name="apellido"
			    placeholder="Ingresa tus apellidos" required>
			  </div>

			  <div class="form-group">
			    <label for="tel">Teléfono</label>
			    <input type="number" class="form-control" id="tel" name="tel" required maxlength="10" placeholder="Proporciona tu número de celular">
			  </div>

			  <div class="form-group">
			    <label for="correo">Email</label>
			    <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ingresa tu email, por ejemplo: correo@ejemplo.com">
			  </div>

			  <div class="form-group">
			    <label for="usuario">Ingresa tu nuevo usuario</label>
			    <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Escribe un nuevo usuario">
			  </div>

			  <div class="form-group">
			    <label for="password">Ingresa nueva contraseña</label>
			    <input type="password" class="form-control" id="password" name="password" required placeholder="Escribe una nueva contraseña">
			  </div>
			 
			  <button type="submit" class="btn btn-primary">Registrarse</button>
			</form>


		  </div>
		</div>
	  </div>
	  <div class="col-md-2"></div>
	</div>
	

</div>