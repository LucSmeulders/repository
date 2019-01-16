<?php

  //var_dump($_COOKIE);
  $name = $_COOKIE['ClientName'];
  $tel = $_COOKIE['ClientTel'];
  $email = $_COOKIE['ClientEmail'];

  echo 'my name is ',$name,' you can call me a my phone ',$tel,' and mail via ',$email;

?>
