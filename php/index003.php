<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $name1[1] = "Dimphy Vogtschmidt";
  $name1[2] = "Erden Ozyalcin";
  $name1[3] = "Dorien Huishagen";
  $name1[4] = "Frederik Wiame";
  $name1[5] = "laurents Bijlhout";
  $name1[6] = "Luc Smeulders";
  $name1[7] = "Mathias Zabot";
  $name1[8] = "Tim Rodeyns";
  $name1[9] = "VJJM Neven";
  $name1[10] = "Wilfried Van Damme";

  $name2['A'] = "Dimphy";
  $name2['B'] = "Dorien";
  $name2['C'] = "Erden";
  $name2['D'] = "Frederik";
  $name2['E'] = "Laurents";
  $name2['F'] = "Luc";
  $name2['G'] = "Mathias";
  $name2['H'] = "VJJM";
  $name2['I'] = "Tim";
  $name2['J'] = "Wilfried";
  $name2[] = "Test";
  $name2[] = "Proef";
  $name2[] = "Oefening";
  $name2['K'] = "Wilfried";
  $name2[1] = "";
  unset($name2[1]);
  $name2["E"] = "";
  unset($name2["E"]);
  $name2[] = "Test";


  $name3 = array("Dimphy","Dorien","Erden","Frederik","Laurents","Luc","Mathias","VJJM","Tim","Wilfried");

  $shirtInfo = array('large', 'blue', 12.00);

  $capitals = array('CA'=>'Sacramento', 'OR'=>'Salem', 'TX'=>'Austin');

  $syntra['Klas1']['Dimphy'] = 20;
  $syntra['Klas1']['Dorien'] = 22;
  $syntra['Klas1']['Erden'] = 25;
  $syntra['Klas2']['Frederik'] = 50;
  $syntra['Klas2']['Laurents'] = 44;
  $syntra['Klas2']['Luc'] = 75;
?>
<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
     sort($name1);
     list(,$naam1,$naam2) = $name1;
     echo $naam1;
     echo '<br>';
     echo $naam2;
     extract($name1);
     echo '<pre>';
     print_r($name1);
     print_r($name2);
     echo '</pre>';
     echo $name2[0];
     echo '<br>';

     sort($shirtInfo);
    list($shirtSize, $shirtColor,) = $shirtInfo;
    echo $shirtSize;
    echo '<br>';
    echo $shirtColor;

    echo '<br>';
    echo '<br>';
    ksort($capitals);
    foreach($capitals as $state => $city){
      echo $city.', '.$state.'<br/>';
      }
      echo '<br>';
      echo '<br>';
    for($i=0;$i<sizeof($capitals);$i++){
      $presentkey = key($capitals);
      echo $presentkey,"  ",$capitals[$presentkey];
      echo '<br>';
      next($capitals);
    }

    var_dump($syntra);
    echo '<table border=1>';

    foreach($syntra as $klasnamen => $studenten){
      foreach($studenten as $nameStudent => $age){
        /*$f_price =sprintf('%01.2f', $price);*/
        echo '<tr><td>'.$klasnamen.'<td>Naam='.' '.$nameStudent.'</td><td>Perentage = '.$age.'</td></tr>';
      }
    }
    echo '</table>';

    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> Winbooks &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
