<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
?>

<html>

   <head>
      <title>Hello Worldje</title>
   </head>

   <body>
     <?php
        $fileName = "txtFolder/myFileNew.txt";
        $fileHandle = fopen($fileName,'w+');
        fwrite($fileHandle,"This is the new text");
        fclose($fileHandle);
        echo "File is created !"
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
