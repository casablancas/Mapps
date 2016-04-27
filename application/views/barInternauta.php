<!-- Barra de internauta -->

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
    <a class="navbar-brand" href="<?php echo base_url() ?>index.php?/Welcome/index">Mapps</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    <!--
      <li class="active"><a href="<?php echo base_url() ?>index.php?/Welcome/agregarDepto">Departamento</a></li>
      <li><a href="#">Enlace #2</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Menú #1 <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #5</a></li>
        </ul>
      </li>
      -->
    </ul>
 
    <!--
    <ul class="nav navbar-nav navbar-right">

      <li><a class="btn btn-default navbar-btn" href="<?php echo base_url() ?>index.php?/Welcome/registro">Registrarse</a></li>

      <li><a class="btn btn-warning navbar-btn" href="<?php echo base_url() ?>index.php?/Welcome/login">Ingresar</a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Usuario <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url() ?>index.php?/Welcome/login">Cerrar Sesión</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
        </ul>
      </li>
    </ul>
    -->

    <ul class="nav nav-pills navbar-right">

      <li><a class="btn btn-warning navbar-btn" href="<?php echo base_url() ?>index.php?/Welcome/registroUsuario">Registrarse</a></li>

      <li><a class="btn btn-success navbar-btn" href="<?php echo base_url() ?>index.php?/Welcome/login">Ingresar</a></li>

      <li class="dropdown">
        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Usuario <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url() ?>index.php?/Welcome/login">Cerrar Sesión</a></li>
          -->
          <!--
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
          -->
        </ul>
      </li>
    </ul>

  </div>
</nav>