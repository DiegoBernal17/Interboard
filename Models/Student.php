<?php namespace Models;

  class Student {
    private $id;
    private $name;
    private $name_paternal;
    private $name_maternal;
    private $birth_day;
    private $address;
    private $phone;
    private $gender;
    private $con;

    public function __construct() {
      $this->con = new Connection();
    }

    public function add() {
      $sql = "INSERT INTO students (ID_student, name, name_paternal, name_maternal, birth_day, enrollment, address, phone, gender,created)
              VALUES (null, '{$this->name}',
                            '{$this->name_paternal}',
                            '{$this->name_maternal}',
                            '{$this->birth_day}',
                            '{$this->generateEnrollment()}',
                            '{$this->address}',
                            '{$this->phone}',
                            '{$this->gender}', NOW())";
      $this->con->simpleQuery($sql);
    }

    public function delete() {
      $sql = "DELETE FROM students WHERE ID_student = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function edit() {
      $sql = "UPDATE students SET name = '{$this->name}',
                                name_paternal = '{$this->name_paternal}',
                                name_maternal = '{$this->name_maternal}',
                                birth_day = '{$this->birth_day}',
                                address = '{$this->address}',
                                phone = '{$this->phone}',
                                gender = '{$this->gender}'
            WHERE ID_student = '{$this->id}'";
      $this->con->simpleQuery($sql);
    }

    public function toList() {
      return $this->con->returnQuery("SELECT t1.*, t2.*, t3.* FROM students t1 INNER JOIN students_list t2 ON t1.ID_student = t2.ID_student INNER JOIN groups t3 ON t2.ID_group = t3.ID_group");
    }

    public function toList2() {
      return $this->con->returnQuery("SELECT * FROM students t1 WHERE NOT EXISTS (SELECT * FROM students_list t2 WHERE t2.ID_student = t1.ID_student)");
    }

    public function generateEnrollment() {
      $sql = $this->con->returnQuery("SELECT MAX(ID_student) AS ID_student FROM students");
      $id = mysqli_fetch_array($sql);
      return date("ymd").(substr($id['ID_student'], 0, 2)+1);
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
      $sql = "SELECT * FROM students WHERE ID_student = '{$this->id}'";
      $data = $this->con->returnQuery($sql);
      return mysqli_fetch_array($data);
    }
  }
 ?>
