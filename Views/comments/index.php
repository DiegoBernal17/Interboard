<div class="box-principal">
<h3 class="titulo">Listado de Comentarios<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Materia</th>
            <th>Padre</th>
            <th>descripción</th>
            <th>Fecha</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><?php echo $row['ID_lesson']; ?></td>
                <td><?php echo $row['ID_user_created']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date_created']; ?></td>
                <td><a class="btn btn-success btn-sm" href="<?php echo URL;?>comments/view/<?php echo $row['ID_comment']; ?>">Ver</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
