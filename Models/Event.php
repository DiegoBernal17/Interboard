<?php namespace Models;

  class Event {
    private $id;
    private $type;
    private $id_to;
    private $name;
    private $description;
    private $start_date;
    private $finish_date;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function add() {
      $sql = "INSERT INTO events (ID_event, type, ID_to, name, description, start_date, finish_date)
              VALUES (null, '{$this->type}', '{$this->id_to}', '{$this->name}', '{$this->description}', '{$this->start_date}', '{$this->finish_date}')";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM events WHERE ID_event = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE events SET type = '{$this->type}',
                                ID_to = '{$this->id_to}',
                                name = '{$this->name}',
                                description = '{$this->description}',
                                start_date = '{$this->start_date}',
                                finish_date = '{$this->finish_date}'
            WHERE ID_event = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT * FROM events");
    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT * FROM events WHERE ID_event = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }
  }
?>
