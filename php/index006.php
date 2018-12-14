<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $product = 150;
  $vat = 21;
  $counter=0;

  function IsPrime($n)
    {
     for($x=2; $x<$n; $x++)
       {
          if($n %$x ==0)
    	      {
    		   return 0;
    		  }
        }
      return 1;
    }
?>

<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
        do {
          if(IsPrime($counter) == 1){
            echo $counter, " is een priemgetal<br>";
          } 
          $counter++;
        } while($counter<=20)
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
