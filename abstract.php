<?php

abstract class Database {
    protected $conn;
    protected $db;
    abstract public function init();
}