<?php

  $sql = "SELECT * FROM 'tasks' ";

  $result = mySqli_query($conn, $sql);
  $array = [];
  //var_dump($result);

  if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){      // = associated array
      var_dump($data);
      $array = array($data['login'],$data['password']);
      array_push($rows,$array);
    }
  } else {
    $data = null;
  }


 ?>
