<?php
session_start();
$resultOk=0;

if($_SERVER['REQUEST_METHOD']=="POST"){

  if(isset($_POST['name']) AND isset($_POST['tel']) AND isset($_POST['email'])) {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $mail = $_POST['email'];

    if(!empty($name) AND !empty($tel) AND !empty($mail)){
      $resultOk = 1;
      setcookie("ClientName",$name,time()+3600);
      setcookie("ClientTel",$tel,time()+3600);
      setcookie("ClientEmail",$mail,time()+3600);

      header('Location: result.php');
    }
  }
}

if($resultOk==0){
  header('Location: index.html');
}
