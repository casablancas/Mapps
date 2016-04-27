<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Ubicación</th>
        <th>Precio</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
       <?php 
      if($deptos)
      {
        foreach($deptos->result() as $row) { ?>
            <tr>
              <td><?php echo $row->iddpto;?></td>
              <td><?php echo $row->latitud.', '.$row->longitud;?></td>
              <td><?php echo $row->precio;?></td>
              <td>
                <a href="<?php echo base_url();?>index.php/Welcome/eliminar/<?php echo $row->iddpto?>"  title="Agregar Analisis">&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?php echo base_url();?>index.php/Welcome/modificar/<?php echo $row->iddpto?>" >&nbsp;<span class="glyphicon glyphicon-pencil"></span></a>
              </td>
            </tr>
             <?php }}?>
    </tbody>
  </table>
</div>