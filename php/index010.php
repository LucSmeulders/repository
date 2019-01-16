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
        $txt1 = "This is the new text";
        $fileName = "txtFolder/myFileNew.txt";
        $fileHandle = fopen($fileName,'a') or die("kan bestand niet aanmaken !!!");
        fwrite($fileHandle,$txt1.chr(13).chr(10));
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
