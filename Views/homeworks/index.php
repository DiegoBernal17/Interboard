<div class="box-principal">
<h3 class="titulo">Listado de Tareas<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Clase</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Finaliza</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><?php echo $row['ID_lesson']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['finish_date']; ?></td>
                <td><a class="btn btn-success btn-sm" href="<?php echo URL;?>homeworks/view/<?php echo $row['ID_homework']; ?>">Ver</a>
                  <a class="btn btn-danger btn-xs" href="<?php echo URL;?>homeworks/delete/<?php echo $row['ID_homework']; ?>">X</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
