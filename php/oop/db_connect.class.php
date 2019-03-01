<?php

// you may consider this as a blueprint thas only will be accessable if object is initialized
class db_connect
{
  // this property can be changed from outside of  the class
  public $host;
  // This property can be changed from a extended class or within the class
  protected $db;
  // This property can only be changed by a function inside the class
  private $user,$pass;

}

// Extends the db-connnect class to gain access to the protected properties
class db_connect_alternative extends db_connect
{
  // this function is to access the protected propertie to override its value
  public function setDb($value){
    $this->db = $value;
  }
  // this function returns the value stored in teh db propertie
  public function getDb(){
    return $this->db;
  }



}
