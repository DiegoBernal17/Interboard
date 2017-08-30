<div class="box-principal">
<h3 class="titulo">Grupo <?php echo $data['group']['grade']." ".$data['group']['section']; ?><hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <div class="panel-title">
        <b>Alumnos: </b> 1
        <b>Capacidad:</b> <?php echo $data['group']['capacity']; ?> alumnos
        <b>Aula:</b> <?php echo $data['group']['num_classroom']; ?>
        <b>Turno:</b> <?php echo $data['group']['turn']; ?>
        <div class="actionButtons">
          <a href="<?php echo URL;?>groups/addStudents/<?php echo $data['group']['ID_group']; ?>" class="btn btn-primary btn-xs">Agregar</a>
          <a href="<?php echo URL;?>groups/edit/<?php echo $data['group']['ID_group']; ?>" class="btn btn-warning btn-xs">Editar</a>
          <a href="<?php echo URL;?>groups/delete/<?php echo $data['group']['ID_group']; ?>" class="btn btn-danger btn-xs">Borrar</a>
        </div>
      </div>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Apellidos</th>
            <th>Nombre(s)</th>
            <th>Matricula</th>
            <th>Promedio</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data['students'])) { ?>
              <tr>
                <td><?php echo $row['name_paternal']." ".$row['name_maternal']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['enrollment']; ?></td>
                <td><?php echo $row['average']; ?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="<?php echo URL;?>students/view/<?php echo $row['ID_student']; ?>">Ver</a>

                </td>
                <td>
                  <a class="btn btn-danger btn-xs" href="<?php echo URL;?>groups/deleteStudent/<?php echo $row['ID_student_list']; ?>">x</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
