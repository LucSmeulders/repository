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
  <h1 class="text-center">Overview <?php echo $result[1]['functie']; ?></h1>
  <div class="row">
    <div class="col-8 offset-2">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Voornaam</th>
            <th scope="col">Naam</th>
            <th scope="col">Functie</th>
          </tr>
        </thead>
        <tbody>
          <?php if($length>0): ?>
            <?php $counter=0 ; ?>

            <?php while($counter<$length) :?>
              <?php $row = $result[$counter]; ?>
              <tr>
                <th scope="row"><?php echo ($counter + 1)."/".sizeof($result); ?></th>
                <td><?php echo $row['voornaam']; ?></td>
                <td><?php echo $row['naam']; ?></td>
                <td><?php echo $row['functie']; ?></td>
              </tr>
              <?php $counter++ ; ?>

            <?php endwhile; ?>
          <?php endif; ?>
         </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php
include_once 'incl/footer.php';
