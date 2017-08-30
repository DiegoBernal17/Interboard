<div class="box-principal">
<h3 class="titulo">Agregar Mensaje<hr></h3>
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
              <select name="type" class="form-control">
                  <option value="">Selecciona para quien será</option>
                  <option value="user">Persona concreta</option>
                  <option value="lesson">Alguna clase</option>
                  <option value="group">Para un grupo</option>
                  <option value="teachers">Todos los maestros</option>
                  <option value="parents">Todos los padres</option>
                  <option value="all">Para todos</option>
              </select>
            </div>
				    <div class="form-group">
				       <input class="form-control" name="name" type="text" placeholder="Nombre:" required>
				       <input class="form-control" name="description" placeholder="Descripcion" type="text">
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
