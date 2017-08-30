<div class="box-principal">
<h3 class="titulo">Listado de Clases<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Materia</th>
            <th>Maestro</th>
            <th>Grupo</th>
            <th>Hora</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><a href="<?php echo URL; ?>matters/view/<?php echo $row['ID_matter'];?>"><?php echo $row['name_matter']; ?></a></td>
                <td><a href="<?php echo URL; ?>teachers/view/<?php echo $row['ID_user'];?>"><?php echo $row['name']." ".$row['name_paternal']." ".$row['name_maternal']; ?></a></td>
                <td><a href="<?php echo URL; ?>groups/view/<?php echo $row['ID_group'];?>"><?php echo $row['grade']." ".$row['section']; ?></a></td>
                <td><?php echo $row['lesson_start']." - ".$row['lesson_finish']; ?></td>
                <td>
                  <a class="btn btn-danger btn-xs" href="<?php echo URL;?>lessons/delete/<?php echo $row['ID_lesson']; ?>">X</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
