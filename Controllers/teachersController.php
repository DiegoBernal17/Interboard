<?php namespace Controllers;

  use Models\Teacher as Teacher;

  class teachersController {
    private $teacher;

    public function __construct() {
      $this->teacher = new Teacher();
    }

    public function index() {
      return $this->teacher->toList();
    }

    public function add() {
      if($_POST) {
        $this->teacher->set("name", $_POST['name']);
        $this->teacher->set("name_paternal", $_POST['name_paternal']);
        $this->teacher->set("name_maternal", $_POST['name_maternal']);
        $this->teacher->set("birth_day", $_POST['birth_day']);
        $this->teacher->set("address", $_POST['address']);
        $this->teacher->set("phone", $_POST['phone']);
        $this->teacher->set("gender", $_POST['gender']);
        $this->teacher->add();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz agregado un nuevo maestro.
              </div>';

      }
    }

    public function view($id) {
      $this->teacher->set("id", $id);
      return $this->teacher->view();
    }

    public function edit($id) {
      $this->teacher->set("id", $id);
      if($_POST) {
        $this->teacher->set("name", $_POST['name']);
        $this->teacher->set("name_paternal", $_POST['name_paternal']);
        $this->teacher->set("name_maternal", $_POST['name_maternal']);
        $this->teacher->set("birth_day", $_POST['birth_day']);
        $this->teacher->set("address", $_POST['address']);
        $this->teacher->set("phone", $_POST['phone']);
        $this->teacher->set("gender", $_POST['gender']);
        $this->teacher->edit();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz editado el maestro.
              </div>';
      }
      return $this->teacher->view();
    }

    public function delete($id) {
      $this->teacher->set("id", $id);
      if($_POST) {
        $this->teacher->delete(); ?>
        <script type="text/javascript">
        this.location.href = '<?php echo URL; ?>teachers';
        </script>
      <?php
      } else
        return $this->teacher->view();
    }

    public function matters($id) {
      $this->teacher->set("id", $id);
      return $this->teacher->viewMatters();
    }
  }
?>
