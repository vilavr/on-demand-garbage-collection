<?php

class Controller {
  protected $model;
  protected $view;

  public function __construct() {
    $this->model = new Model();
    $this->view = new View($this->model->getData());
  }

  public function run() {
    // Handle user input and render the view
    echo $this->view->render();
  }
}