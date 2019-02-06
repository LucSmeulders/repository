<?php
  ini_set('display_error', 5);
  if(isset($_SESSION)){
    $mySession = $_SESSION;
    session_destroy();
  }
  error_reporting(E_ALL);
  $index=0;
?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link href="css/main.css">
     <title>Login></title>
   </head>

   <body>
     <body>
       <div class="container">
         <div class="row">
           <div class="col-8 offset-2">
             <h1 class="text-center mt-2 pt-5 pb-2">Welcome, you are logged in</h1>

        </div>
     </body>


   </body>


</html>
