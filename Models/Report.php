<?php namespace Models;

  class Report {
    private $id;
    private $id_student;
    private $id_teacher;
    private $name;
    private $description;
    private $type;
    private $date_created;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function seen() {
      $sql = "UPDATE reports SET date_seen = NOW()
            WHERE ID_report = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function add() {
      $sql = "INSERT INTO reports (ID_report, ID_student, ID_user_created, name, description, type, date_created, date_seen)
              VALUES (null, '{$this->id_student}', '{$this->id_teacher}', '{$this->name}', '{$this->description}', '{$this->type}', '{$this->date_created}', null)";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM reports WHERE ID_report = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE reports SET id_student = '{$this->id_student}',
                                name = '{$this->name}',
                                description = '{$this->description}',
                                type = '{$this->type}',
            WHERE ID_report = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT * FROM reports");
    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT * FROM reports WHERE ID_report = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }
  }
 ?>
