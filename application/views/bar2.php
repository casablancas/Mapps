<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url() ?>index.php?/Welcome/indexAuth">Mapps</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url() ?>index.php?/Welcome/agregarDepto">Registrar Vivienda</a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">  
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Usuario <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url() ?>index.php?/Welcome/login">Cerrar Sesión</a></li>
            </ul>
          </li>
  </ul>
    
  </div>

</nav>