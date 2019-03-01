<?php

require_once 'incl/functions.php';

// check if post is send
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  var_dump($_POST);
  //die();
  if(isset($_POST['name'])){

    $id = empty($_POST['id']) ? '' : escape($_POST['id']);
    $name = empty($_POST['name']) ? '' : escape($_POST['name']);
    $familyname = empty($_POST['familyname']) ? '' : escape($_POST['familyname']);
    $klas_id = empty($_POST['klas_id']) ? '' : escape($_POST['klas_id']);
    if(!empty($id)){
      // connect to DB
      require_once 'db.class.php';
      $conn = new db('localhost', 'root', '', 'todo');
      $conn->updateDataById("students", $id, $name, $familyname, $klas_id);

      header('Location: index.php');

    }



  // redirect to index.php
  header('Location: index.php');
  }
}

require_once 'db.class.php';
$conn = new db('localhost', 'root', '', 'todo');
$klasresult = $conn->getAllData('klasnamen');

$id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : "" ;
// check if post is send
if(!$id == "")
{
  require_once 'db.class.php';
  $conn = new db('localhost', 'root', '', 'todo');
  $result = $conn->getDataById("students", $id);
  //var_dump($result);

  $oldName = $result['name'];
  $oldFamilyname = $result['familyname'];
  $oldKlas_id = $result['klas_id'];
}

include_once 'incl/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h1 class="text-center">Update student</h1>
      <form action="" method="POST">
        <div class="form-group">
          <label for="task">Student update</label>
          <input type="name" class="form-control" id="name" placeholder="Update name" name="name" value="<?php echo $oldName; ?>">
          <br>
          <input type="familyname" class="form-control" id="familyname" placeholder="Update familyname" name="familyname" value="<?php echo $oldFamilyname; ?>">
          <br>
          <select name="klas_id" value="<?php echo $oldKlas_id; ?>" >
            <?php foreach($klasresult as $klasvalue): ?>
              <option <?php echo $klasvalue['klas_id'] == $oldKlas_id ? 'selected' :  ''; ?> id="<?php echo $klasvalue['klas_id']; ?>" value="<?php echo $klasvalue['klas_id']; ?>"><?php echo $klasvalue['klasnaam']; ?></option>
            <?php endforeach; ?>
          </select>
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
