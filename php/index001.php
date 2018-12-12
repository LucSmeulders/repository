<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  include_once "secured\_variables.php";
  var_dump($hello);
  $product = 150;
  $vat = 21;
?>

<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
        echo $hello , " " , $voornaam , " " , $achternaam;
        echo "Bedrag incl BTW " , number_format($product * (1 + ($vat / 100)),2);
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> Winbooks &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
