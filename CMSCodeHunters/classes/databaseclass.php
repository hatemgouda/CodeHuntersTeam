<?php

class Database{
private $host = DB_HOST;
private $user = DB_USER;
private $pass = DB_PASS;
private $dbname = DB_NAME;
private $db;
private $error;
private $stmt;

public function __construct(){
            // Report all errors except E_NOTICE
          error_reporting("E_ALL & ~E_NOTIC");

         // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        // Create PDO instanace
        try{
            $this->db = new PDO($dsn, $this->user, $this->pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC) ;
            $this->db->exec('SET NAMES utf8') ;
        }
        //throw new exception
        catch(PDOException $e){
            echo "Not Connected:" .$e->getmessage();
        }
    }

public function query($query){
    $this->stmt = $this->db->prepare($query);
}

public function bind($param, $value){


$this->stmt->bindParam($param, $value);
}

public function execute(){
    return $this->stmt->execute();
}

public function fetchall(){
    $this->execute();
    return $this->stmt->fetchAll();
}
public function fetch(){
    $this->execute();
    return $this->stmt->fetch();
}

public function rowCount(){
    return $this->stmt->rowCount();
}




}
