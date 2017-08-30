<?php namespace Controllers;

  use Models\Homework as Homework;

  class homeworksController {
    private $homework;

    public function __construct() {
      $this->homework = new Homework();
    }

    public function index() {
      return $this->homework->toList();
    }

    public function view($id) {
      $this->homework->set("id", $id);
      return $this->homework->view();
    }

    public function add() {
      if($_POST) {
        $this->homework->set("id_lesson", $_POST['lesson']);
        $this->homework->set("name", $_POST['name']);
        $this->homework->set("description", $_POST['description']);
        $this->homework->set("start_date", $_POST['start']);
        $this->homework->set("finish_date", $_POST['finish']);
        $this->homework->add();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz agregado una nueva tarea.
              </div>';
      } else
        return $this->homework->toListLesson();
    }

    public function delete($id) {
      $this->homework->set("id", $id);
      if($_POST) {
              echo "asdasd";
        $this->homework->delete();
        echo "hola"; ?>
        <script type="text/javascript">
        this.location.href = '<?php echo URL; ?>homeworks';
        </script>
      <?php
      } else
        return $this->homework->view();
    }
  }
?>
