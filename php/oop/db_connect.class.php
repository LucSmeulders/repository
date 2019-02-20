<?php

class db_connect
{
  public $host;
  protected $db;
  private $user,$pass;

}

class db_connect_alternative extends db_connect
{

  public function setDb($value){
    $this->db = $value;
  }

  public function getDb(){
    return $this->db;
  }



}
