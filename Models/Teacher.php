<?php namespace Models;

  class Teacher {
    private $id;
    private $name;
    private $name_paternal;
    private $name_maternal;
    private $birth_day;
    private $username;
    private $password;
    private $email;
    private $phone;
    private $address;
    private $gender;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function add() {
      $sql = "INSERT INTO users (ID_user, name, name_paternal, name_maternal, birth_day, username, password, email, phone, address, gender, created, type)
              VALUES (null, '{$this->name}',
                            '{$this->name_paternal}',
                            '{$this->name_maternal}',
                            '{$this->birth_day}',
                            '{$this->username}',
                            '{$this->password}',
                            '{$this->email}',
                            '{$this->phone}',
                            '{$this->address}',
                            '{$this->gender}', NOW(), 'teacher')";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM users WHERE ID_user = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE users SET name = '{$this->name}',
                                name_paternal = '{$this->name_paternal}',
                                name_maternal = '{$this->name_maternal}',
                                birth_day = '{$this->birth_day}',
                                email = '{$this->email}',
                                phone = '{$this->phone}',
                                address = '{$this->address}',
                                gender = '{$this->gender}'
            WHERE ID_user = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT * FROM users WHERE type = 'teacher'");
    }

    public function set($attribute, $content) {
      if($attribute == "gender") {
        if($content == "M" || $content == "F")
          $this->gender = $content;
        else
          print "Error al asignar al atributo 'gender'.";
      } else {
        $this->$attribute = $content;
      }
    }

    public function get($attribute) {
      return $this->$attribute;
    }

    public function view() {
      $sql = "SELECT * FROM users WHERE ID_user = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }

    public function viewMatters() {
      $sql = "SELECT t1.*, t2.*, t3.* FROM lessons t1
              INNER JOIN matters t2 ON t2.ID_matter = t1.ID_matter
              INNER JOIN groups t3 ON t3.ID_group = t1.ID_group
              WHERE ID_user = '{$this->id}'";
      return $this->con->returnQuery($sql);
    }

    public function login() {
      $sql = $this->con->returnQuery("SELECT * FROM users WHERE username = '{$this->username}'");
      $data = mysqli_fetch_array($sql);
      if(is_null($data)) {
        print "No existe usuario<br>";
        return false;
      }
      if(password_verify($this->password, $data['password'])) {
        return true;
      }
      return false;
    }
  }
 ?>
