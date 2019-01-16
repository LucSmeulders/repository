<?php
include_once "myFunctions.php";

session_start();
$checkUser = array("username" => "Luc","password" => "Test123");
//$myPassWord = "abc";
$resultOk = 0;
$attemps  = isset($_COOKIE['attemps']) ? $_COOKIE['attemps'] : 0;

if($_SERVER['REQUEST_METHOD']=="POST") // AND $attemps<4)
{
  if(isset($_POST['userName']) AND isset($_POST['passWord']))
  {
    //$userName = $_POST['userName'];
    //passWord = $_POST['passWord'];
    $user = array("username" => $_POST['userName'],"password" => $_POST['passWord']);
      //if(checkPassWord($passWord))
    if($checkUser == $user)
    {
      $resultOk = 1;
      setcookie("UserName",$user['username'],time()+3600);
      setcookie("PassWord",$user['password'],time()+3600);
      setcookie("attemps",0,time()+600);

      header('Location: result.php');
    }
  }
}

if($resultOk==0){
  setcookie("attemps",$attemps+1,time()+600);
  if($attemps>2){
    echo 'Te veel pogingen (',$attemps,'), wacht 5 minuten...';
  } else {
    header('Location: index.html');
  }
}
