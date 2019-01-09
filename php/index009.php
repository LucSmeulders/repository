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
        $fileName = "txtFolder/myFile.txt";
        $fileSize = filesize($fileName);
        $fileHandle = fopen($fileName,'r');
        for($index=1;$index<$fileSize;$index++){
          $fileContent = fread($fileHandle,$index);
          echo $fileContent;
          echo "<br>";
        }
        fclose($fileHandle);
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
