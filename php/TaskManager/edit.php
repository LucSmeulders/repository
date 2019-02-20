<?php

require_once 'incl/functions.php';

// check if post is send
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['task'])){

    $task = empty($_POST['task']) ? '' : escape($_POST['task']);
    $id = empty($_POST['id']) ? '' : escape($_POST['id']);

    if(!empty($task)){
      // connect to DB
      require 'incl/db_connect.php';

      $sql = "UPDATE tasks
              SET task = '$task', completed = 0
              WHERE task_id = $id
              ";

      // push data to new row
      //$result = $conn->query($sql);
      var_dump($sql);
      //var_dump($result);
      //die();

      if($conn->query($sql) === true){
          // redirect to index.php
          header('Location: index.php');
      } else {
        die('Oeps, something went wrong !!!');
      }

    }



  // redirect to index.php
  header('Location: index.php');
  }
}


$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : "" ;
// check if post is send
if(!$id == "")
{
  include "incl/db_connect.php";

  $sql = "SELECT * FROM tasks
          WHERE task_id = $id
          ";

  $result = $conn->query($sql);

  if($result->num_rows > 0){

      while($row = $result->fetch_assoc()){
      $oldTask = $row['task'];
    }
  }
}

include_once 'incl/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h1 class="text-center">Update task</h1>
      <form action="" method="POST">
        <div class="form-group">
          <label for="task">Task update</label>
          <input type="text" class="form-control" id="task" placeholder="Update task" name="task" value="<?php echo $oldTask; ?>">
          <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php
include_once 'incl/footer.php';
?>
