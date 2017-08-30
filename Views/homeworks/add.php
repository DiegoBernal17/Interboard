<div class="box-principal">
<h3 class="titulo">Agregar Tarea<hr></h3>
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
              <select name="lesson" class="form-control">
                  <option value="">Selecciona la clase</option>
                  <?php while($row = mysqli_fetch_array($data)) { ?>
                    <option value="<?php echo $row['ID_lesson']; ?>"><?php echo $row['ID_lesson'] ?></option>
                  <?php } ?>
              </select>
            </div>
				    <div class="form-group">
				        <input class="form-control" name="name" type="text" placeholder="Nombre:" required>
				    </div>
				    <div class="form-group">
				       <input class="form-control" name="description" placeholder="Descripcion" type="text" required>
				    </div>
				    <div class="form-group">
				      <label class="control-label">Inicia</label>
				        <input class="form-control" name="start" type="date" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>" required>
				      <label class="control-label">Termina</label>
				        <input class="form-control" name="finish" min="<?php echo date("Y-m-d"); ?>" type="date" value="<?php echo date("Y-m-d"); ?>" required>
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
