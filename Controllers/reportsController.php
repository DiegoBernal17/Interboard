<?php namespace Controllers;

  use Models\Report as Report;

  class reportsController {
    private $report;

    public function __construct() {
      $this->report = new Report();
    }

    public function index() {
      return $this->report->toList();
    }
  }
 ?>
