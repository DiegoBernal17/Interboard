<div class="box-principal">
<h3 class="titulo">Editar Grupo<hr></h3>
	<div class="panel panel-success psmall">
	  <div class="panel-heading">
	    <h3 class="panel-title"></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-xs-1"></div>
	  		<div class="col-sm-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label class="control-label">Grado</label>
				        <input class="form-control" name="grade" type="number" value="<?php echo $data['grade']; ?>" required>
				    </div>
				    <div class="form-group">
				      <label class="control-label">Sección</label>
				        <input class="form-control" name="section" value="<?php echo $data['section']; ?>" type="text" required>
				    </div>
				    <div class="form-group">
				      <label class="control-label">Capacidad</label>
				        <input class="form-control" name="capacity" value="<?php echo $data['capacity']; ?>" type="number" required>
				    </div>
            <div class="form-group">
				      <label class="control-label">Aula</label>
				        <input class="form-control" name="num_classroom" value="<?php echo $data['num_classroom']; ?>" type="text" required>
				    </div>
            <div class="form-group">
				      <label class="control-label">Turno</label>
				      <select name="turn" class="form-control">
				      		<option value="morning">Matutino</option>
                  <option value="evening" <?php if($data['turn'] == "evening") echo "selected"; ?>>Vespertino</option>
				      </select>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
							 <a href="<?php echo URL."groups/view/".$data['ID_group']; ?>" class="btn btn-default"> Regresar </a>
				    </div>
				</form>
	  		</div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
