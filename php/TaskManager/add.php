<?php

require_once 'incl/functions.php';

// check if post is send
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['task'])){

    $newTask = empty($_POST['task']) ? '' : escape($_POST['task']);

    // check is 'name' !empty
    if(!empty($newTask)){
      // connect to DB
      require 'incl/db_connect.php';

      $sql = "INSERT INTO tasks
              (task, completed)
              VALUES ('$newTask',0)
              ";
              var_dump($sql);
              //die();
      // push data to new row
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

include_once 'incl/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h1 class="text-center">New task</h1>
      <form action="" method="POST">
        <div class="form-group">
          <label for="task">Task to do</label>
          <input type="text" class="form-control" id="task" placeholder="Enter task" name="task">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php
include_once 'incl/footer.php';
?>
