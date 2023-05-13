<?php

class Database {
    protected $conn;
    protected $db = 'lina';

    public function init() {
        $this->conn = new mysqli('loocalhost', 'root', '');
        $this->conn->query("CREATE DATABASE IF NOT EXISTS ". $this->db);
        $this->conn = new mysqli('loocalhost', 'root', '', $this->db);
    }
}