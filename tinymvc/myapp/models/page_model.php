<?php

/**
 *
 */
class Page_Model extends TinyMVC_Model
{

  public function get_title()
  {
    return "Hello World 4";
  }

  public function get_body_text()
  {
    return "Hello World baby";
  }

  public function getUserName()
  {
    $this->db->select('*'); // set selected columns
    $this->db->from('users');  // set from what table(s)
    $this->db->where('id',"1"); // where foo='test'
    $this->db->query();
    while($row = $this->db->next()) {
      
      $rows[] = $row;
      //var_dump($rows);

    }
    return $rows[0]['name'];

  }
}
