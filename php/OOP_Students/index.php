<?php

require_once 'db.class.php';

$conn = new db('localhost', 'root', '', 'todo');

$result = $conn->getAllJoinData('students, klasnamen');
$length = $conn->numOfRows;

//$klasresult = $conn->getAllData('klasnamen');


include_once 'incl/header.php';
?>

<div class="container">
  <h1 class="text-center">Overview students</h1>
  <div class="row">
    <div class="col-8 offset-2">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Voornaam</th>
            <th scope="col">Familienaam</th>
            <th scope="col">Klasnaam</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php if($length>0): ?>
            <?php $counter=0 ; ?>

            <?php while($counter<$length) :?>
              <?php $row = $result[$counter]; ?>
              <tr>
                <th scope="row"><?php echo ($counter + 1)."/".sizeof($result); ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['familyname']; ?></td>
                <td><?php echo $row['klasnaam']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['student_id']; ?>" class="btn btn-update"type="button">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['student_id']; ?>" class="btn btn-danger"type="button">Delete</a></td>
              </tr>
              <?php $counter++ ; ?>

            <?php endwhile; ?>
          <?php endif; ?>
         </tr>
        </tbody>
      </table>
      <a href="add.php">Voeg een nieuwe toe</a>
    </div>
  </div>
</div>


<?php
include_once 'incl/footer.php';
