<div class="box-principal">
<h3 class="titulo">Listado de Grupos<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Grado</th>
            <th>Seccion</th>
            <th>Capacidad</th>
            <th>Aula</th>
            <th>Turno</th>
            <th>Alumnos</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><?php echo $row['grade']; ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['capacity']; ?></td>
                <td><?php echo $row['num_classroom']; ?></td>
                <td><?php echo $row['turn']; ?></td>
                <td>1</td>
                <td>
                  <a class="btn btn-success btn-sm" href="<?php echo URL;?>groups/view/<?php echo $row['ID_group']; ?>">Ver</a>
                  <a class="btn btn-primary btn-sm" href="<?php echo URL;?>groups/addStudents/<?php echo $row['ID_group']; ?>">Agregar Alumnos</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
