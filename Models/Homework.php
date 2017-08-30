<?php namespace Models;

  class Homework {
    private $id;
    private $id_lesson;
    private $name;
    private $description;
    private $start_date;
    private $finish_date;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function add() {
      $sql = "INSERT INTO homeworks (ID_homework, ID_lesson, name, description, start_date, finish_date)
              VALUES (null, '{$this->id_lesson}', '{$this->name}', '{$this->description}', '{$this->start_date}', '{$this->finish_date}')";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM homeworks WHERE ID_homework = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE homeworks SET name = '{$this->name}',
                                description = '{$this->description}',
                                start_date = '{$this->start_date}',
                                finish_date = '{$this->finish_date}'
            WHERE ID_homework = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT * FROM homeworks");
    }

    public function toListLesson() {
      return $this->con->returnQuery("SELECT * FROM Lessons");
    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT * FROM homeworks WHERE ID_homework = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }
  }
?>
