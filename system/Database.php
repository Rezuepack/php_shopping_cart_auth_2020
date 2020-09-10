<?php
class Database {

    private $server = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO($this->server, $this->user, $this->pass, $this->options);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

}