<?php

  $sql = "SELECT * FROM TEST";

  $result = mySqli_query($conn, $sql);

  //var_dump($result);
  echo "<br>";
  if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){      // = associated array
      //var_dump($data);
      echo "Id: ".$data['test_id']." Name: ".$data['firstname']." ".$data['lastname']."<br>";
    }
  } else {
    echo "Geen data gevonden";
  }


 ?>
