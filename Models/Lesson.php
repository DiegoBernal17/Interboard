<?php namespace Models;

  class Lesson {
    private $id;
    private $id_teacher;
    private $id_matter;
    private $id_group;
    private $lesson_start;
    private $lesson_finish;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function add() {
      $sql = "INSERT INTO lessons (ID_lesson, ID_user, ID_matter, ID_group, lesson_start, lesson_finish)
              VALUES (null, '{$this->id_teacher}', '{$this->id_matter}', '{$this->id_group}', '{$this->lesson_start}', '{$this->lesson_finish}')";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM lessons WHERE ID_lesson = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE lessons SET ID_user = '{$this->id_teacher}',
                                 ID_matter = '{$this->id_matter}',
                                 ID_group = '{$this->id_group}',
                                 lesson_start = '{$this->lesson_start}',
                                 lesson_finish = '{$this->lesson_finish}'
              WHERE ID_lesson = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      $sql = "SELECT t1.*, t2.name, t2.name_paternal, t2.name_maternal, t3.name AS name_matter, t4.grade, t4.section FROM lessons t1
              INNER JOIN users t2 ON t2.ID_user = t1.ID_user
              INNER JOIN matters t3 ON t3.ID_matter = t1.ID_matter
              INNER JOIN groups t4 ON t4.ID_group = t1.ID_group";
      return $this->con->returnQuery($sql);
    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT t1.*, t2.name, t2.name_paternal, t2.name_maternal, t3.name AS name_matter, t4.grade, t4.section FROM lessons t1
              INNER JOIN users t2 ON t2.ID_user = t1.ID_user
              INNER JOIN matters t3 ON t3.ID_matter = t1.ID_matter
              INNER JOIN groups t4 ON t4.ID_group = t1.ID_group
              WHERE t1.ID_lesson = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }

    public function viewAdd() {
      $sql1 = $this->con->returnQuery("SELECT * FROM users WHERE type = 'teacher'");
      $sql2 = $this->con->returnQuery("SELECT * FROM matters");
      $sql3 = $this->con->returnQuery("SELECT * FROM groups");
      return array("teachers" => $sql1, "matters" => $sql2, "groups" => $sql3);
    }
  }
