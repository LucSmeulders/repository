<?php
include_once 'function.php';

session_start();
$myUsers = array(array("lucsmeulders@gmail.com" , "abc"),array("joop@gmail.com","geen"));
$myEmail = "lucsmeulders@gmail.com";
$myPassWord = "abc";
$resultOk = 0;
$attemps  = isset($_COOKIE['attemps']) ? $_COOKIE['attemps'] : 0;

var_dump($_POST);

if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['email']) AND isset($_POST['password']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(checkUser($myUsers,$email,$password))
    {
      $resultOk = 1;
      setcookie("Email",$email,time()+3600);
      setcookie("PassWord",$password,time()+3600);
      setcookie("attemps",0,time()+600);

      $_SESSION['status'] = array('OK','Email and password correct');
      relocator('welcome.php');
    }
    else {
      $_SESSION['status'] = array('failed','Wrong email or password');
      relocator('index.php');
    }

  }
}

if($resultOk==0){
  setcookie("attemps",$attemps+1,time()+600);
  if($attemps>2){
    echo 'Te veel pogingen (',$attemps,'), wacht 5 minuten...';
  } else {
    /*relocator('index.html');*/
  }
}
