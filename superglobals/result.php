<?php
session_start();

  $name = $_SESSION['name'];
  $age = $_SESSION['age'];
  echo 'my name is ',$name,' and I am ',$age," year";

  // delete al variables
  //session_unset();

  // delete session
  //session_destroy();
?>
