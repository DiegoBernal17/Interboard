<div class="box-principal">
<h3 class="titulo"> <hr></h3>
	<div class="panel panel-success psmall">
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-xs-1"></div>
	  		<div class="col-sm-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
				      <label class="control-label">¿Eliminar a <b><?php echo $data['name']." ".$data['name_paternal']." ".$data['name_maternal']; ?></b>?</label>
							<input type="hidden" value="<?php echo $data['ID_user']; ?>" name="g">
				    </div>
				    <div class="form-group">
							 <a href="<?php echo URL."teachers/view/".$data['ID_user']; ?>" class="btn btn-default"> Regresar </a>
				    	 <button type="submit" class="btn btn-danger">Eliminar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
