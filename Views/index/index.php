<div class="box-principal">
<h3 class="titulo">Bienvenido a Interboard<hr></h3>

<?php if(isset($_SESSION['error'])) { ?>
  <div class="alert alert-dismissible alert-danger psmall">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?php echo $_SESSION['error']?></strong>
</div>
<?php unset($_SESSION['error']); } ?>

  <div class="panel panel-default psmall">
    <div class="panel-body">
    <?php if(LOGGED){ ?>

    <?php } else { ?>
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <fieldset>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label"></label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label"></label>
            <div class="col-lg-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> No cerrrar sesión
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Conectarse</button>
              <a href="<?php echo URL; ?>register/" class="btn btn-success disabled">Registrarse</a>
            </div>
          </div>
        </fieldset>
      </form>
    <?php } ?>
     </div>
   </div>
 </div>
