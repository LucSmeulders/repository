<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $index=0;
?>

<html>
   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
        echo "<h3>";
        $index=0;
        while ($index<9)
        {
          echo "abc ";
          $index++;
        }
        echo "<br>";
        echo "<br>";

        $index=0;
        do {
          echo "xyz ";
          $index++;
        } while($index<9);
        echo "<br>";
        echo "<br>";

        for($index=1;$index<=9;$index++){
          echo $index," ";
        }
        echo "<br>";
        echo "<br>";

        for($index=1;$index<=9;$index++){
          echo $index, ". Item ", chr($index + 64),"<br>";
        }
        echo "</h3>";
    ?>
      <address>
        <br><br>
        Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
        Alle rechten voorbehouden. All rights reserved.
      </address>
   </body>


</html>
