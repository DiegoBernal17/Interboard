<div class="box-principal">
<h3 class="titulo"><hr></h3>
	<div class="panel panel-success psmall">
	  <div class="panel-heading">
      <div class="panel-title">
        <div class="actionButtons">
          <a href="<?php echo URL;?>homeworks/edit/<?php echo $data['ID_homework']; ?>" class="btn btn-warning btn-xs">Editar</a>
          <a href="<?php echo URL;?>homeworks/delete/<?php echo $data['ID_homework']; ?>" class="btn btn-danger btn-xs">Borrar</a>
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
            <b>Descripción:</b>  <?php echo $data['description']; ?>
          </div>
          <div class="well well-sm">
            <b>Inicia:</b> <?php echo $data['start_date']; ?>
          </div>
          <div class="well well-sm">
            <b>Termina:</b> <?php echo $data['finish_date']; ?>
          </div>
          </div>
        </div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
