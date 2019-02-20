<?php
  $id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : "";
  if(!$id == ""){

    include "incl/db_connect.php";

    $sql = "DELETE FROM tasks WHERE task_id = $id";
    var_dump($sql);
    //die();
    $result = $conn->query($sql);

    header('Location: index.php');
  }
 ?>
