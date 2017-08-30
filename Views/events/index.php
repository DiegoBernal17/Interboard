<div class="box-principal">
<h3 class="titulo">Listado de Eventos<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>tipo</th>
            <th>nombre</th>
            <th>descripción</th>
            <th>Inicia - Finaliza</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['start_date'].' - '.$row['finish_date']; ?></td>
                <td><a class="btn btn-success btn-sm" href="<?php echo URL;?>events/view/<?php echo $row['ID_events']; ?>">Ver</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
