<?php
function my_autoloader($class_name){
  require_once("controllers/$class_name.php");
}

spl_autoload_register('my_autoloader');

/*require_once 'controllers/home.php';
require_once 'controllers/contact.php';
require_once 'controllers/error.php';
*/

// Dispatching the world

if(isset($_GET['page']) && $_GET['page'] !== ""){
  if($_GET['page'] == 'contact'){
    $contactController = new contactController();
    $contactController->index();
  } else {
    $errorController = new errorController();
    $errorController->index();
  }
} else {
  $homeController = new homeController();
  $homeController->index();

}

 ?>
