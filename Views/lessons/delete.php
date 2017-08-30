<div class="box-principal">
<h3 class="titulo"><hr></h3>
	<div class="panel panel-success psmall">
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-xs-1"></div>
	  		<div class="col-sm-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
				      <label class="control-label">¿Eliminar la clase de <b><?php echo $data['name_matter']; ?></b> de <b><?php echo $data['name']." ".$data['name_paternal']." ".$data['name_maternal']; ?></b>?</label>
							<input type="hidden" value="<?php echo $data['ID_group']; ?>" name="l">
						</div>
				    <div class="form-group">
							 <a href="<?php echo URL."lessons" ?>" class="btn btn-default"> Regresar </a>
				    	 <button type="submit" class="btn btn-danger">Eliminar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
