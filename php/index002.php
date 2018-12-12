<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $age = 15;
  $name = "Griet";
  $country = "Belgie";
  $kids = 3;

  $year = 2018;
  $birthyear = 2001;

  $age = 40;
  $maxage = 75;

  $language = "FR";
  $message = "";

  $single = "appel";
  $quant = 3;

  $tempSystem = 2;
  $temperature = 36;
  $tempCelsius = 0;
  $tempFahrenheid = 0;
  $tempKelvin = 0;
  $tempUnit = "";

  define("CEL","&#8451;");
  define("FAR","&#8457;");
  define("KEL","&#8490;");

  function conv_cel2far($temp1) {
    return number_format(($temp1 * 9 / 5)+32,2,',',' ');
  }
  function conv_far2cel($temp2) {
    return number_format(($temp2 -32) / (9 / 5),2,',',' ');
  }
  function conv_cel2kel($temp3) {
    return number_format(($temp3 + 273.15),2,',',' ');
  }

  function conv_kel2cel($temp4) {
    return ($temp4 - 273.15);
  }
?>
<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
        echo "U bent ", $age, " jaar en woont in ", $country, " en bent met " , $name , " en heeft ",$kids," kinderen.";
        echo '<br>';
        echo "U bent ", ($year-$birthyear) , " jaar";
        echo '<br>';
        echo "U heeft nog ", ($maxage-$age) , " jaar voordat je de leeftijd van ", $maxage , " jaar bereikt heeft";
        echo '<br>';
        echo "uitkomst oefening 4 = 11";
        echo '<br>';

        switch($language)
        {
          case "EN" :
            $message = "Hello World";
            break;
          case "FR" :
            $message = "Bonjour tout le monde";
            break;
          default:
            $message = "Hallo iedereen";
            break;
        }
        echo $message;
        echo '<br>';
        echo "ik heb ",$quant," ",$single;
        if ($quant > 1) {

          echo "s";
        }
        echo '<br>';
        echo '<br>';
        echo '<br>';

        echo "Temperatuur ingegeven = ",$tempSystem," = ";
        switch($tempSystem)
        {
          case 1 :
            $tempUnit = CEL;
            break;
          case 2 :
            $tempUnit = FAR;
            break;
          default:
            $tempUnit = KEL;
            break;
        }
        echo $tempUnit;
        echo '<br>';
        echo "Temperatuur gemeten = ",$temperature," ",$tempUnit;
        echo '<br>';
        echo '<br>';
        echo "Omgerekend is dit";
        echo '<br>';
        switch($tempSystem)
        {
          case 1 :
            echo $temperature," ",$tempUnit," = ",conv_cel2far($temperature)," ",FAR,"  = ",conv_cel2kel($temperature)," ",KEL;
            break;
          case 2 :
            $tempCelsius = conv_far2cel($temperature);
            echo $temperature," ",$tempUnit," = ",$tempCelsius," ",CEL,"  = ",conv_cel2kel($tempCelsius)," ",KEL;
            break;
          default:
            $tempUnit = $kel;
            break;
        }
    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> Winbooks &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
