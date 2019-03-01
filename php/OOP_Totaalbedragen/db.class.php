<?php

class db
{
  protected $host, $username, $password, $dbname;

  private $conn;
  public $numOfRows;

  public function __construct($host = 'localhost', $username ='root', $password ='', $dbname ='students')
  {
    $this->host =$host;
    $this->username =$username;
    $this->password =$password;
    $this->dbname = $dbname;


    try {
    $this->conn = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname, $this->username, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

  }
    public function getAllData($table=null){
      //$stmt = $this->conn->prepare("SELECT * FROM ".$table);
      $sql = "SELECT * FROM `personen`";
      //var_dump($sql);

      $stmt = $this->conn->prepare($sql);

      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $result = $stmt->fetchAll();
      $this->numOfRows = sizeof($result);
      return $result;

    }

    public function getAllJoinData($table=null){
      $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE bestuur.bestuur_id = 1");
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $result = $stmt->fetchAll();
      $this->numOfRows = sizeof($result);
      return $result;

    }

    public function getDataById($table=null, $id=null){
      $stmt = $this->conn->prepare("SELECT * FROM ".$table." WHERE student_id=".$id);
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      return $stmt->fetchAll()[0];
    }

    public function deleteDataById($table=null, $id=null){
      $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE student_id=".$id);
      $stmt->execute();
    }

    public function addStudent($table=null,$name,$familyname, $klas_id){
      $stmt = $this->conn->prepare("INSERT INTO ".$table."(name,familyname,klas_id) VALUES ('".$name."','".$familyname."','".$klas_id."')");
      $stmt->execute();
    }

    public function updateDataById($table, $id, $name, $familyname, $klas_id){
      $stmt = $this->conn->prepare("UPDATE ".$table." SET name = '".$name."', familyname = '".$familyname."', klas_id = '".$klas_id."' WHERE student_id=".$id);
      $stmt->execute();
    }

    public function rows(){
      return $this->numOfRows;
    }


}
