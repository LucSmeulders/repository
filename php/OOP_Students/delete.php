<?php
  $student_id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : "";
  var_dump($student_id);
  if(!$student_id == ""){

    require_once 'db.class.php';
    $conn = new db('localhost', 'root', '', 'todo');
    $conn->deleteDataById("students", $student_id);


  }
  header('Location: index.php');
 ?>
