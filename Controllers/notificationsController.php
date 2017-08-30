<?php namespace Controllers;

  use Models\Notification as Notification;

  class notificationsController {
    private $notification;

    public function __construct() {
      $this->notification = new Notification();
    }

    public function index() {
      return $this->notification->toList();
    }

    public function add() {
      if($_POST) {
        $this->notification->set("id_from", $_POST['from']);
        $this->notification->set("type", $_POST['type']);
        $this->notification->set("id_to", $_POST['to']);
        $this->notification->set("name", $_POST['name']);
        $this->notification->set("description", $_POST['description']);
        $this->notification->add();
        echo '<div class="alert alert-dismissible alert-success psmall">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>¡Hecho!</strong> Haz agregado una nueva noticia.
              </div>';
      } else
      {}
    }
  }
 ?>
