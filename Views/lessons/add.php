<div class="box-principal">
<h3 class="titulo">Agregar Clase<hr></h3>
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
				      <label class="control-label">Maestro</label>
				      <select name="teacher" class="form-control">
                <?php while($row = mysqli_fetch_array($data['teachers'])) { ?>
				      		<option value="<?php echo $row['ID_user']; ?>"><?php echo $row['name'].$row['name_paternal'].$row['name_maternal']; ?></option>
                <?php } ?>
				      </select>
				      <label class="control-label">Materia</label>
				      <select name="matter" class="form-control">
                <?php while($row = mysqli_fetch_array($data['matters'])) { ?>
				      		<option value="<?php echo $row['ID_matter']; ?>"><?php echo $row['name']; ?></option>
                <?php } ?>
				      </select>
				      <label class="control-label">Grupo</label>
				      <select name="group" class="form-control">
                <?php while($row = mysqli_fetch_array($data['groups'])) { ?>
				      		<option value="<?php echo $row['ID_group']; ?>"><?php echo $row['grade'],$row['section']; ?></option>
                <?php } ?>
				      </select>
				    </div>
            <div class="form-group">
				      <label class="control-label">Hora Inicio</label>
				      <input class="form-control" name="start" type="number" min="0" max="24" required>
				      <label class="control-label">Hora finaliza</label>
				      <input class="form-control" name="finish" min="0" max="24" type="number" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Agregar</button>
				       <button type="reset" class="btn btn-warning">Limpiar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
