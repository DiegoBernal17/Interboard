<div class="box-principal">
<h3 class="titulo">Listado de Maestros<hr></h3>
 	<div class="panel panel-success">
 	  <div class="panel-heading">
 	    <h3 class="panel-title"></h3>
 	  </div>
 	  <div class="panel-body">
 	    <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Apellidos</th>
            <th>Nombre(s)</th>
            <th></th>
          </tr>
        </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><?php echo $row['name_paternal']." ".$row['name_maternal']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><a class="btn btn-success btn-sm" href="<?php echo URL;?>teachers/view/<?php echo $row['ID_user']; ?>">Perfil</a>
                  <a class="btn btn-success btn-sm" href="<?php echo URL;?>teachers/matters/<?php echo $row['ID_user']; ?>">Materias</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
       </table>
     </div>
   </div>
 </div>
