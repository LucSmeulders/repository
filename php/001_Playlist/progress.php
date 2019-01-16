<?php
session_start();
$resultOk=0;
$makeJson=1;

class myPlayList {
  public $name = "";
  public $mail = "";

  public $song1 = "";
  public $song2 = "";
  public $song3 = "";
}


if($_SERVER['REQUEST_METHOD']=="POST"){
  //var_dump($_POST);

  if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['artist1']) AND isset($_POST['title1']) AND isset($_POST['artist2']) AND isset($_POST['title2']) AND isset($_POST['artist3']) AND isset($_POST['title3'])) {
    $resultOk=1;
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $artist1 = $_POST['artist1'];
    $artist2 = $_POST['artist2'];
    $artist3 = $_POST['artist3'];
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $title3 = $_POST['title3'];

    if($makeJson=0)
    {
      $fileName = "myList/PlayList.txt";
      $fileHandle = fopen($fileName,"a");
      fwrite($fileHandle,$name.PHP_EOL);
      fwrite($fileHandle,$mail.PHP_EOL);
      fwrite($fileHandle,'Artiest 1 = '.$artist1.' •  Nummer = '.$title1.PHP_EOL);
      fwrite($fileHandle,'Artiest 2 = '.$artist2.' •  Nummer = '.$title2.PHP_EOL);
      fwrite($fileHandle,'Artiest 3 = '.$artist3.' •  Nummer = '.$title3.PHP_EOL.PHP_EOL);
      $stats = fstat($fileHandle);
      var_dump($stats);
      fclose($fileHandle);
      header('Location: thanks.html');
    } elseif($makeJson=1)
    {
      $myPlayList = new myPlayList();
      $myPlayList->name = $name;
      $myPlayList->mail = $mail;
      $myPlayList->song1 = array(
        "artist" => $artist1,
        "title" => $title1
      );
      $myPlayList->song2 = array(
        "artist" => $artist2,
        "title" => $title2
      );
      $myPlayList->song3 = array(
        "artist" => $artist3,
        "title" => $title3
      );

      $myPlayListJson = json_encode($myPlayList);
      var_dump($myPlayListJson);
      $fileName = "myList/PlayList.json";
      $fileHandle = fopen($fileName,"a");
      fwrite($fileHandle,$myPlayListJson.PHP_EOL);
      fclose($fileHandle);
    }

  }
}

if($resultOk==0){
  header('Location: index.html');
}
