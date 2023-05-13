<?php

include 'abstract.php';

interface Motto {
    public function motto ();
}

class NewStudent extends Database implements Motto {
   public function createDB() {
    $this->conn->query("CREATE DATABASE IF NOT EXISTS ". $this->db);
    $this->conn = new mysqli('localhost', 'root', '', $this->db);
   }
   public function motto () {
    return "Basic";
   }
} 

$data1 = new NewStudent();
$con = $data1->createDB();

if ($con == true) {
    echo "successful";
}


