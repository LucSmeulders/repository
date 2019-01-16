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
        if(file_exists($fileName)){
          $fileSize = filesize($fileName);
          $fileHandle = fopen($fileName,'r'); // or die("kan bestand niet openen !!!");
          $fileContent = fread($fileHandle,$fileSize);
          echo $fileContent;
          echo "<br>";
          fclose($fileHandle);
        } else {
          echo "File not found";
        }
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
