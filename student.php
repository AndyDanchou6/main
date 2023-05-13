<?php

include 'abstract.php';

interface Init {
    public function connect();
}

class NewStudent extends Database implements Init {
    public function connect() {
        $this->init();
    }
    public function init() {
        $this->db = 'lina';
        $this->conn = new mysqli('localhost', 'root', '');
        $this->conn->query("CREATE DATABASE IF NOT EXISTS". $this->db);
        $this->conn = new mysqli('localhost', 'root', '', $this->db);
    }
} 

class OldStudent extends Database implements Init {
    public function connect() {
        $this->init();
    }
    public function init() {
        $this->db = 'lina';
        $this->conn = new mysqli('localhost', 'root', '');
        $this->conn->query("CREATE DATABASE IF NOT EXISTS". $this->db);
        $this->conn = new mysqli('localhost', 'root', '', $this->db);
    }
} 

$data1 = new NewStudent();
$con = $data1->connect();

if ($con) {
    echo "successful";
}


