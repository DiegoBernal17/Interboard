<?php namespace Models;

  class Notification {
    private $id;
    private $id_from;
    private $type;
    private $id_to;
    private $name;
    private $description;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function seen() {
      $sql = "UPDATE notifications SET date_seen = NOW()
            WHERE ID_notification = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function add() {
      $sql = "INSERT INTO notifications (ID_notification, ID_from, type, ID_to, name, description, date_created, date_seen)
              VALUES (null, '{$this->id_from}', '{$this->type}', '{$this->id_to}', '{$this->name}', '{$this->description}', NOW(), null)";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM notifications WHERE ID_notification = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE notifications SET type = '{$this->type}',
                                name = '{$this->name}',
                                description = '{$this->description}'
            WHERE ID_notification = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT * FROM notifications");
    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT * FROM notifications WHERE ID_notification = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }
  }
 ?>
