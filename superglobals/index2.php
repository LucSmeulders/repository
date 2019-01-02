<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  echo 'my name is ',$name,' my Email is ',$email," and my message ",$message;

}else {
    echo '<form action="index.php" method="POST">
    Naam <input type="text" name="name">    <br>
    Email <input type="email" name="email">    <br>
    Uw vraag <input type="text" name="message">    <br>
    <input type="submit" value="Verstuur">
  </form>';
}
var_dump($_POST);
var_dump($_SESSION);
