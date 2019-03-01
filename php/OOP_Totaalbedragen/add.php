<?php

require_once 'db.class.php';
require_once 'incl/functions.php';

$conn = new db('localhost', 'root', '', 'todo');
$klasresult = $conn->getAllData('klasnamen');

// check if post is send
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['name'])){

    $newName = empty($_POST['name']) ? '' : escape($_POST['name']);
    $newFamilyName = empty($_POST['familyname']) ? '' : escape($_POST['familyname']);
    $newKlas_id = empty($_POST['klas_id']) ? '' : escape($_POST['klas_id']);

    // check is 'name' !empty
    if(!empty($newName)){
      // connect to DB
      $conn = new db('localhost', 'root', '', 'todo');
      $conn->addStudent("students",$newName,$newFamilyName,$newKlas_id);
      // redirect to index.php
      header('Location: index.php');

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
      <h1 class="text-center">New student</h1>
      <form action="" method="POST">
        <div class="form-group">
          <label for="task">Name student</label>
          <input type="text" class="form-control" id="name" placeholder="Student name" name="name">
          <br>
          <label for="task">Familyname</label>
          <input type="text" class="form-control" id="familyname" placeholder="Student familyname" name="familyname">
          <br>
          <select name="klas_id" value="<?php echo $oldKlas_id; ?>" >
            <?php foreach($klasresult as $klasvalue): ?>
              <option id="<?php echo $klasvalue['klas_id']; ?>" value="<?php echo $klasvalue['klas_id']; ?>"><?php echo $klasvalue['klasnaam']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php
include_once 'incl/footer.php';
?>
