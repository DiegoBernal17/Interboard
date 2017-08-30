<?php namespace Controllers;

use Models\Teacher as Teacher;

  class indexController {
    private $teacher;

    public function index() {
      if(!empty($_POST)) {
        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
          $this->teacher = new Teacher();
          $this->teacher->set("username", $_POST['email']);
          $this->teacher->set("password", $_POST['password']);
          if($this->teacher->login())
            $_SESSION['LOGGED'] = $_POST['email'];
          else
            $_SESSION['error'] = "Acceso incorrecto";
          ?>
          <script type="text/javascript">
          this.location.href = '<?php echo URL; ?>';
          </script>
          <?php
        }
      } else {

      }
    }
  }
 ?>
