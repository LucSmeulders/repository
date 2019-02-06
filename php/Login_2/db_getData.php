<?php

  $sql = "SELECT * FROM USERS WHERE login = '$email' AND password = '$password' ";

  $result = mysqli_query($conn, $sql);
  
  $userFound = mysqli_num_rows($result)==1;

 ?>
