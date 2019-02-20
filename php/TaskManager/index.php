<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $index=0;
  session_start();


  // connect to DB
  require 'incl/db_connect.php';

  // Pull all data from DB
  $sql = "SELECT * FROM `tasks` ";
  $result = $conn->query($sql);

  include_once 'incl/header.php';
?>

  <div class="container">
    <h1 class="text-center">My tasks</h1>
    <div class="row">
      <div class="col-8 offset-2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Task</th>
              <th scope="col">Completed</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php if($result->num_rows>0): ?>
              <?php $counter=1 ; ?>

              <?php while($row = $result->fetch_assoc()) :?>
                <tr>
                  <th scope="row"><?php echo $counter."/".$result->num_rows; ?></th>
                  <td><?php echo $row['task']; ?></td>
                  <td><?php echo $row['completed']; ?></td>
                  <td><a href="edit.php?id=<?php echo $row['task_id']; ?>" class="btn btn-update"type="button">Edit</a></td>
                  <td><a href="delete.php?id=<?php echo $row['task_id']; ?>" class="btn btn-danger"type="button">Delete</a></td>
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
