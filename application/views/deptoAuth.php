
<div class="container">
	<div class="row">
		<div class="panel panel-primary">
		  <div class="panel-heading">Descripción de la Casa / Departamento</div>	
		  <div class="panel-body">
		    <div clas="row">
		    	<div class="col-xs-6">
		    		<img src="http://www.bienesonline.com/mexico/photos/casa-renta-puebla-car520491329343831.jpg" alt="imagen" class="img-rounded" width="400" height="250">

		    	</div>


  				<div class="col-xs-6">
  					<h3>Precio:</h3><h2><? echo '$ '.$precio?></h2>
  					<H3>Servicios</H3>
  					<div>

  						<?if($agua == 1){?>
  							<img src="assets/img/agua.png" alt="agua" class="img-rounded" width="60" height="60">&nbsp;
  						<?}else{?>
  							<img src="assets/img/aguaN.png" alt="agua" class="img-rounded" width="60" height="60">&nbsp;	
  						<?}?>

  						<?if($tel == 1){?>
  							<img src="assets/img/tel.png" alt="telefono" class="img-rounded" width="60" height="60">&nbsp;
  						<?}else{?>
  							<img src="assets/img/telN.png" alt="telefono" class="img-rounded" width="60" height="60">&nbsp;	
  						<?}?>

  						<?if($luz == 1){?>
  							<img src="assets/img/luz.png" alt="luz" class="img-rounded" width="60" height="60">&nbsp;
  						<?}else{?>
  							<img src="assets/img/luzN.png" alt="luz" class="img-rounded" width="60" height="60">&nbsp;	
  						<?}?>

  						<?if($gas == 1){?>
  							<img src="assets/img/gas.png" alt="gas" class="img-rounded" width="60" height="60">&nbsp;
  						<?}else{?>
  							<img src="assets/img/gasN.png" alt="gas" class="img-rounded" width="60" height="60">&nbsp;	
  						<?}?>

  						<?if($internet == 1){?>
  							<img src="assets/img/wifi.png" alt="internet" class="img-rounded" width="60" height="60">&nbsp;
  						<?}else{?>
  							<img src="assets/img/wifiN.png" alt="internet" class="img-rounded" width="60" height="60">&nbsp;	
  						<?}?>
              <div>
              <br>
              <!-- Botón pensado para los mensajes con alertas informativas -->
              <button type="button" class="btn btn-info">Cita</button>
              </div>

  						
  						

  					</div>

  				</div>
		    </div>
		  </div>
		</div>
	</div>
</div>