<?php namespace Controllers;

  use Models\Lesson as Lesson;

  class lessonsController {
    private $lesson;

    public function __construct() {
      $this->lesson = new Lesson();
    }

    public function index() {
      return $this->lesson->toList();
    }

    public function delete($id) {
      $this->lesson->set("id", $id);
      if($_POST) {
        $this->lesson->delete(); ?>
        <script type="text/javascript">
        this.location.href = '<?php echo URL; ?>lessons';
        </script>
      <?php
      } else
        return $this->lesson->view();
    }

    public function add() {
      if($_POST) {
        $this->lesson->set("id_teacher", $_POST['teacher']);
        $this->lesson->set("id_matter", $_POST['matter']);
        $this->lesson->set("id_group", $_POST['group']);
        $this->lesson->set("lesson_start", $_POST['start']);
        $this->lesson->set("lesson_finish", $_POST['finish']);
        $this->lesson->add();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz agregado una nueva clase.
              </div>';
      } else
        return $this->lesson->viewAdd();
    }
  }
 ?>
