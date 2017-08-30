<div class="box-principal">
<h3 class="titulo">Agregar Estudiante<hr></h3>
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
				      <label class="control-label">Nombre</label>
				        <input class="form-control" name="name" type="text" required>
				    </div>
            <div class="form-group">
				      <label class="control-label">Apellido Paterno</label>
				        <input class="form-control" name="name_paternal" type="text" required>
				    </div>
            <div class="form-group">
				      <label class="control-label">Apellido materno</label>
				        <input class="form-control" name="name_maternal" type="text">
				    </div>
            <div class="form-group">
				      <label class="control-label">Fecha nacimiento</label>
				        <input class="form-control" name="birth_day" type="date" required>
				    </div>
            <div class="form-group">
				      <label class="control-label">Dirección</label>
				        <input class="form-control" name="address" type="text" required>
				    </div>
            <div class="form-group">
				      <label class="control-label">Teléfono</label>
				        <input class="form-control" name="phone" type="number">
				    </div>
            <div class="form-group">
				      <label class="control-label">Sexo</label>
				      <select name="gender" class="form-control">
				      		<option value="M">Masculino</option>
                  <option value="F">Femenino</option>
				      </select>
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
