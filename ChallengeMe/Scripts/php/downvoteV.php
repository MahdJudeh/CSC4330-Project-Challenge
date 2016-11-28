<?php
ob_start();
session_start();
echo "hi";
require_once('./includes/db_connect.php');
if($_SESSION['login'] == 'true'){
  if(isset($_POST['downvoteVideo'])){
    $video = $_POST['VideoID'];
  }
  $query = "SELECT UV, DV, Upvotes, Downvotes from Video where VideoID=". $video;
  $result = mysqli_query($dbc, $query);
  $row = mysqli_fetch_array($result);


  if($row[11] == null && $row[10] == null){
    $sqlV = "UPDATE Video SET DV = true, Downvotes= 1 + ".$row['Downvotes'] . " WHERE VideoID=". $video;
    mysqli_query($dbc, $sqlV);
  }
  else if($row[11] == 0 && $row[10] == 1){
      $sqlV = "UPDATE Video SET DV= true, UV = false, Downvotes= 1 + ".$row['Downvotes'] . " WHERE VideoID=". $video;
      mysqli_query($dbc, $sqlV);

  }
  else if($row[11] == null && $row[10] == 1){
      $sqlV = "UPDATE Video SET DV = true, UV = false, Downvotes= 1 + ".$row['Downvotes'] . " WHERE VideoID=". $video;
      mysqli_query($dbc, $sqlV);

  }
  echo "You have successfully submitted a challenge.";
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit();

}
else{
  echo "hi";
  header("Location: http://challengeme.life/Scripts/php/login.php");
  exit();
}
ob_end_flush();
  ?>
