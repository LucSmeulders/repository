<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $totAmount = 600;
  $discount = 0;
?>

<html>

   <head>
      <title>Uw kassas</title>
   </head>

   <body>
     <?php

        echo "<h1>IF - ElseIF - Else</h1>";
        echo '<br>';
        if($totAmount>500) {
          $discount = 20;
        }
        elseif ($totAmount>250) {
          $discount = 15;
        }
        elseif ($totAmount>150) {
          $discount = 7.5;
        }
        elseif ($totAmount>100) {
          $discount = 5;
        }
        else {
          $discount = 0;
        }
        echo "Totaal bedrag van uw aankopen =  " , $totAmount, "€";
        echo '<br>';
        echo "Uw korting is ", $discount , "%";
        echo '<br>';
        echo "Het te betalen bedrag = ", $totAmount * (100-$discount)/100, "€";

        echo '<br>';
        echo '<br>';
        echo '<br>';

        echo "<h1>Switch - Case - Default</h1>";
        echo '<br>';
        switch (True){
          case($totAmount>500): {
            $discount = 20;
            break;
          }
          case ($totAmount>250): {
            $discount = 15;
            break;
          }
          case ($totAmount>150): {
            $discount = 7.5;
            break;
          }
          case ($totAmount>100): {
            $discount = 5;
            break;
          }
          default: {
            $discount = 0;
            break;
          }
        }
        echo "Totaal bedrag van uw aankopen =  " , $totAmount, "€";
        echo '<br>';
        echo "Uw korting is ", $discount , "%";
        echo '<br>';
        echo "Het te betalen bedrag = ", $totAmount * (100-$discount)/100, "€";
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
