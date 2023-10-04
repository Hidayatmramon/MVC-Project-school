<?php

class Database{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db_name = DB_NAME;
  private $dbh;
  private $stmt;

  public function __construct(){

    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;


    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function query($query){
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value){
    $this->stmt->bindValue($param, $value);
  }
  public function execute(){
    $this->stmt->execute();
  }
  public function resultSet(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function rowCount(){
    return $this->stmt->rowCount();
  }
}
