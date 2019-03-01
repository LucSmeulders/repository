<?php

require_once 'db.class.php';

$conn = new db('localhost', 'root', '', 'voorbeeld-database');

$result = $conn->getAllData('bestuur, personen');
$length = $conn->numOfRows;

//var_dump($result);
//die();
//$klasresult = $conn->getAllData('klasnamen');


include_once 'incl/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h1 class="text-center">Overview bedragen</h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="text-center" scope="col">ID</th>
            <th scope="col">Voornaam</th>
            <th scope="col">Naam</th>
            <th class="text-right" scope="col">Jaarsalaris</th>
            <th class="text-right" scope="col">Vakantiegeld</th>
          </tr>
        </thead>
        <tbody>
          <?php if($length>0): ?>
            <?php $counter=0 ; ?>
            <?php $totSalaris=0 ; ?>
            <?php $totVakantie=0 ; ?>

            <?php while($counter<$length) :?>
              <?php $row = $result[$counter]; ?>
              <tr>
                <th class="text-center" scope="row"><?php echo ($counter + 1)."/".sizeof($result); ?></th>
                <td><?php echo $row['voornaam']; ?></td>
                <td><?php echo $row['naam']; ?></td>
                <td class="text-right"><?php echo $row['jaarsalaris']; ?></td>
                <td class="text-right"><?php echo $row['vakantiegeld']; ?></td>
              </tr>
              <?php $totSalaris += $row['jaarsalaris'] ; ?>
              <?php $totVakantie += $row['vakantiegeld'] ; ?>
              <?php $counter++ ; ?>

            <?php endwhile; ?>
            <tr>
              <th></th>
              <td><strong><h2>Totalen</h2></strong></td>
              <td></td>
              <td class="text-right"><strong><?php echo $totSalaris ; ?></strong></td>
              <td class="text-right"><strong><?php echo $totVakantie ; ?></strong></td>
            </tr>
          <?php endif; ?>
         </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php
include_once 'incl/footer.php';
