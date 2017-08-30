<?php namespace Models;

  class Comment {
    private $id;
    private $id_lesson;
    private $id_parent;
    private $description;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function seen() {
      $sql = "UPDATE comments SET date_seen = NOW()
            WHERE ID_comments = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function add() {
      $sql = "INSERT INTO comments (ID_comment, ID_lesson, ID_user_created, description, date_created, date_seen)
              VALUES (null, '{$this->id_lesson}', '{$this->id_parent}', '{$this->description}', NOW(), null)";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM comments WHERE ID_comment = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE comments SET description = '{$this->description}'
            WHERE ID_comment = '{$this->id}'";
      $this->$con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT * FROM comments");
    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT * FROM comments WHERE ID_comment = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }
  }
 ?>
