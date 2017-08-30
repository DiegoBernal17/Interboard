<div class="box-principal">
<h3 class="titulo">Agregar alumnos al grupo <?php echo $data['group']['grade']." ".$data['group']['section']; ?><hr></h3>
	<div class="panel panel-success psmall">
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-xs-1"></div>
	  		<div class="col-sm-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
				      <label class="control-label">Alumnos sin grupo</label>
				      <select name="student" class="form-control">
                  <?php while($row = mysqli_fetch_array($data['students'])) { ?>
				      		<option value="<?php echo $row['ID_student']; ?>"><?php echo $row['name']." ".$row['name_paternal']." ".$row['name_maternal']." - ".$row['enrollment']; ?></option>
                  <?php } ?>
				      </select>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Agregar</button>
							 <a href="<?php echo URL."groups/view/".$data['group']['ID_group']; ?>" class="btn btn-default"> Regresar </a>
				    </div>
				</form>
	  		</div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>

  <div class="panel panel-success psmall">
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-xs-1"></div>
	  		<div class="col-sm-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
				      <label class="control-label">Agregar alumno por su matrícula:</label>
              <input class="form-control" name="enrollment" type="text">
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Agregar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-xs-1"></div>
	  	</div>
	  </div>
	</div>
</div>
