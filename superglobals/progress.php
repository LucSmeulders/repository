<?php

session_start();

if($_SERVER['REQUEST_METHOD']="POST"){

  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $age = intval(isset($_POST['age']) ? $_POST['age'] : '0');
  if($age>0)
  {
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    header('Location: result.php');
  } else {
    header('Location: index.html');
  }

  //var_dump($_SESSION);
} else{
  header('Location: index.html');
}
