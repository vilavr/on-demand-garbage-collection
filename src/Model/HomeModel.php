<?php

class Model {
  protected $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
  }

  public function getData() {
    // Retrieve data from the database
    $stmt = $this->db->prepare('SELECT * FROM mytable');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}