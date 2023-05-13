<?php

abstract class Database {
    protected $conn;
    protected $db = 'lina';

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '');
    }

    abstract public function createDB();
}