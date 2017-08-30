<?php namespace Controllers;

  use Models\Student as Student;

  class studentsController {
    private $student;

    public function __construct() {
      $this->student = new Student();
    }

    public function index() {
      return $this->student->toList();
    }

    public function nogroup() {
      return $this->student->toList2();
    }

    public function add() {
      if($_POST) {
        $this->student->set("name", $_POST['name']);
        $this->student->set("name_paternal", $_POST['name_paternal']);
        $this->student->set("name_maternal", $_POST['name_maternal']);
        $this->student->set("birth_day", $_POST['birth_day']);
        $this->student->set("address", $_POST['address']);
        $this->student->set("phone", $_POST['phone']);
        $this->student->set("gender", $_POST['gender']);
        $this->student->add();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz agregado un nuevo estudiante.
              </div>';

      }
    }

    public function view($id) {
      $this->student->set("id", $id);
      return $this->student->view();
    }

    public function edit($id) {
      $this->student->set("id", $id);
      if($_POST) {
        $this->student->set("name", $_POST['name']);
        $this->student->set("name_paternal", $_POST['name_paternal']);
        $this->student->set("name_maternal", $_POST['name_maternal']);
        $this->student->set("birth_day", $_POST['birth_day']);
        $this->student->set("address", $_POST['address']);
        $this->student->set("phone", $_POST['phone']);
        $this->student->set("gender", $_POST['gender']);
        $this->student->edit();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz editado el estudiante.
              </div>';
      }
      return $this->student->view();
    }

    public function delete($id) {
      $this->student->set("id", $id);
      if($_POST) {
        $this->student->delete(); ?>
        <script type="text/javascript">
        this.location.href = '<?php echo URL; ?>students';
        </script>
      <?php
      } else
        return $this->student->view();
    }
  }
?>
