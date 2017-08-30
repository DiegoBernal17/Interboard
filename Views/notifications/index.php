<div class="box-principal">
<h3 class="titulo">Listado de Avisos<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Para</th>
            <th>tipo</th>
            <th>nombre</th>
            <th>descripción</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><?php echo $row['ID_from']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><a class="btn btn-success btn-sm" href="<?php echo URL;?>notifications/view/<?php echo $row['ID_notification']; ?>">Ver</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
