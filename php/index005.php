<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $product = 150;
  $vat = 21;
  $name1[1] = "Dimphy Vogtschmidt";
  $name1[2] = "Erden Ozyalcin";
  $name1[3] = "Dorien Huishagen";
  $name1[4] = "Frederik Wiame";
  $name1[5] = "laurents Bijlhout";
  $name1[6] = "Luc Smeulders";
  $name1[7] = "Mathias Zabot";
  $name1[8] = "Tim Rodeyns";
  $name1[9] = "VJJM Neven";
  $name1[10] = "Wilfried Van Damme";
?>

<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
     for($i=0;$i<=5.99;$i+=0.2) {
       echo str_repeat('*',cos($i)*20+30),'<br>';
     }

     echo '<br>';
     for($index=0;$index<=sizeof($name1);$index++) {
       if(isSet($name1[$index])){
         echo "Hallo ",$name1[$index], '<br>';
       }

     }
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
