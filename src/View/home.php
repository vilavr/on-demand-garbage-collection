<?php

class View {
  protected $data;

  public function __construct($data) {
    $this->data = $data;
  }

  public function render() {
    // Render the HTML template with the data
    ob_start();
    $view = $this;
    include 'template.phtml';
    return ob_get_clean();
  }
}