<?php namespace Models;

  class User {
    private $id;
    private $name;
    private $name_paternal;
    private $name_maternal;
    private $birth_day;
    private $phone
    private $address;
    private $gender;

    public function login() {

    }

    public function register() {

    }

    public function set($attribute, $content) {
      $this->$attribute = $content;
    }

    public function get($attribute) {
      return $this->$attribute;
    }
  }
 ?>
