<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $product = 150;
  $vat = 21;
  $test = "abcdefg";
  $ascore = array(85,60,72,50);
  $index=0;
?>

<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
        echo "<h1>Functions</h1><br>";
        echo "Oppervlakte rechthoek " , surfaceRectagle(10,14) , "<br>";
        echo "Omtrek rechthoek " , perimeterRectagle(10,14) , "<br>";
        echo "Lengte diagonaal rechthoek " , diagonalLengteRectagle(3,4) , "<br>";
        echo "Oppervlakte cirkel " , surfaceCircle(10) , "<br>";
        echo "'abc' naar hash = " , hash ( "md5" , "abc"), "<br>";
        echo "<br>";
        for($index=0;$index<sizeof($ascore);$index++)
        {
          echo "Je uitslag ",$ascore[$index],"% is een " , scoreNumberToVar($ascore[$index]), "<br>";
        }
        echo "<br>";
        display(8);

        echo "<br>";
        echo "<br>";
        echo "<h1>Xml dump</h1>";
        $myXMLData =
        "<?xml version='1.0' encoding='UTF-8'?>
        <note>
        <to>Tove</to>
        <sub>
        <from>Jani</from>
        <from2>Jani</from2>
        </sub>
        <heading>Reminder</heading>
        <body>Don't forget me this weekend!</body>
        </note>";

        $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
        var_dump($xml);


    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> aXito &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>

<?php
  function surfaceRectagle($height=0,$width=0)
    {
      return $height * $width;
    }

  function perimeterRectagle($height=0,$width=0)
    {
      return $height *  2 +  $width * 2;
    }

  function diagonalLengteRectagle($height=0,$width=0)
    {
      return sqrt(pow($height,2) +  pow($width,2));
    }


  function surfaceCircle($radius=0)
    {
      return kwardraat($radius *  2) *  pi() /4;
    }

  function kwardraat($number)
    {
      /*return $number*$number;*/
      return pow($number,2);
    }

    function double2($var)
    {
      return $var * 2;
    }

    function tripple($var)
    {
      return $var * 3;
    }

    function display($var)
    {
      echo "Totaal waarde ".$var." x2 = " , double2($var), "<br>";
      echo "Totaal waarde ".$var." x3 = " , tripple($var), "<br>";
      global $test;
      echo $test;
    }

    function scoreNumberToVar($score)
    {
      $scoreLetter = "";
      switch (True){
        case($score>90): {
          $scoreLetter = "A";
          break;
        }
        case ($score>80): {
          $scoreLetter = "B";
          break;
        }
        case ($score>70): {
          $scoreLetter = "C";
          break;
        }
        case ($score>65): {
          $scoreLetter = "D";
          break;
        }
        default: {
          $scoreLetter = "F";
          break;
        }
      }
      return $scoreLetter;
    }

?>
