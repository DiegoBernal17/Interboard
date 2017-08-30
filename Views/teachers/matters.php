<div class="box-principal">
<h3 class="titulo">Clases asignadas<hr></h3>
	<div class="panel panel-success psmall">
	  <div class="panel-heading">
      <div class="panel-title">
        <div class="actionButtons">
          <a href="<?php echo URL;?>teachers/addMatter/" class="btn btn-primary btn-xs">Asignar Clase</a>
        </div>
      </div>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
				<table class="table table-striped table-hover ">
		    	<thead>
		    	</thead>
					<tbody>
						<div class="list-group">
            <?php
              while ($row = mysqli_fetch_array($data)) { ?>
              <tr>
                <td><div class="list-group-item">
	             		<?php echo "<b>Hora:</b>".$row['lesson_start']."-".$row['lesson_finish']." <b>Materia:</b> ".$row['name']." <b>Grupo:</b> ".$row['grade']." ".$row['section']; ?>
								</div></td>
								<td><a class="btn btn-danger btn-xs" href="<?php echo URL;?>teachers/deleteMatter/<?php echo $row['ID_lesson']; ?>">X</a> </td>
							</tr>
					 	<?php } ?>
				 	</tbody>
				 </table>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
