<div class="box-principal">
<h3 class="titulo"><hr></h3>
	<div class="panel panel-<?php if($data['gender'] == 'M') echo 'primary'; else echo 'info'; ?> psmall">
	  <div class="panel-heading">
      <div class="panel-title">
        <div class="actionButtons">
          <a href="<?php echo URL;?>teachers/edit/<?php echo $data['ID_user']; ?>" class="btn btn-warning btn-xs">Editar</a>
          <a href="<?php echo URL;?>teachers/delete/<?php echo $data['ID_user']; ?>" class="btn btn-danger btn-xs">Borrar</a>
        </div>
      </div>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-xs-1"></div>
	  		<div class="col-sm-10">
          <div class="well well-sm">
				        <b>Nombre:</b>  <?php echo $data['name']; ?>
          </div>
          <div class="well well-sm">
            <b>Apellido paterno:</b>  <?php echo $data['name_paternal']; ?>
          </div>
          <div class="well well-sm">
            <b>Apellido materno:</b> <?php echo $data['name_maternal']; ?>
          </div>
          <div class="well well-sm">
            <b>Fecha de nacimiento:</b>  <?php echo $data['birth_day']; ?>
          </div>
          <div class="well well-sm">
            <b>Dirección:</b>  <?php echo $data['address']; ?>
          </div>
          <div class="well well-sm">
            <b>Teléfono:</b> <?php echo $data['phone']; ?>
          </div>
        </div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
