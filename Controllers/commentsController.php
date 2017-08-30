<?php namespace Controllers;

  use Models\Comment as Comment;

  class commentsController {
    private $comment;

    public function __construct() {
      $this->comment = new Comment();
    }

    public function index() {
      return $this->comment->toList();
    }
  }
 ?>
