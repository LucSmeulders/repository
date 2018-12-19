<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $maxvalue = 8;
  $index=0;
  $actorsNames = array("Piet","Jan","Carlo");
  $floatSpeed = 10.4;
  $names = array("Coro","Johnny Cago","Kano","Liu Kano","Raiden","Raptile","Scorpion","Shang","Tsun","Sonya","Sub-Zero");
?>

<html>

   <head>
      <title>Hello Worldje</title>
   </head>

   <body>
     <?php
        echo "het getal ",$floatSpeed," afgerond naar boven = ", ceil($floatSpeed),"<br>";
        echo "het getal ",$floatSpeed," afgerond naar beneden = ", floor($floatSpeed),"<br>";
        echo "<br>";
        echo showRandomName($names);


        for($index=0;$index<sizeof($actorsNames);$index++){
          sayActorsName($index,$actorsNames[$index]);
        }

        echo "<br>";
        sayAllActorsNames($actorsNames);

        for($index=1;$index<=$maxvalue;$index++){
          sayOddOrEven($index);
        }
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>

<?php
  function sayOddOrEven($value){
    if($value%2 == 0){
      echo "Het getal ",$value," is even";
    } else {
      echo "Het getal ",$value," is oneven";
    }
    echo "<br>";

  }

  function sayActorsName($index,$actorsName)
  {
    echo "De ",$index+1,"e acteur is ",$actorsName,"<br>";

  }

  function sayAllActorsNames($actorsNames)
  {
    $positionStr = array("eerste","tweede","derde","vierde","vijfde","zesde","zevende","achtste","negende","tiende");
    $index=0;
    $arraySize = sizeof($actorsNames);
    for($index=0;$index<$arraySize;$index++){
      echo $actorsNames[$index]," is de ",$positionStr[$index]," acteur";
      /* adding a extra comma at eitch sub-text, but not after the last one*/
      if ($index<$arraySize-1)
      {
        echo ", ";
      }
    }
    echo "<br>";
    echo "<br>";
  }

  function showRandomName($names)
  {
    $arraySize = sizeof($names);
    $randNum = rand(0,$arraySize-1);

    echo "Een willekeurige naam ",$names[$randNum];
    echo "<br>";
  }
 ?>
