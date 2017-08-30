<?php namespace Controllers;

  use Models\Event as Event;

  class eventsController {
    private $event;

    public function __construct() {
      $this->event = new Event();
    }

    public function index() {
      return $this->event->toList();
    }
  }
?>
