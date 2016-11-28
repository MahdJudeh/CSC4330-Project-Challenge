<?php
ob_start();
session_start();
echo "hi";
require_once('./includes/db_connect.php');
if($_SESSION['login'] == 'true'){
  if(isset($_POST['upvoteVideo'])){
    $video = $_POST['VideoID'];
  }
  $query = "SELECT UV, DV, Upvotes, Downvotes from Video where VideoID=". $video;
  $result = mysqli_query($dbc, $query);
  $row = mysqli_fetch_array($result);
  if($row['UV'] == null && $row['DV'] == null){
    $sqlV = "UPDATE Video SET UV = 1, Upvotes= 1 + ".$row['Upvotes'] . " WHERE VideoID=". $video;
    mysqli_query($dbc, $sqlV);
  }
  else if($row['UV'] == 0 && $row['DV'] == 1){
      $sqlV = "UPDATE Video SET UV = 1, DV = 0, Upvotes= 1 + ".$row['Upvotes'] . " WHERE VideoID=". $video;
      mysqli_query($dbc, $sqlV);

  }
  else if($row['UV'] == null && $row['DV'] == 1){
      $sqlV = "UPDATE Video SET UV = 1, DV = 0, Upvotes= 1 + ".$row['Upvotes'] . " WHERE VideoID=". $video;
      mysqli_query($dbc, $sqlV);

  }
  else if($row['UV'] == 1 && $row['DV'] == 1){
      $sqlV = "UPDATE Video SET UV = 1, DV = 0, Upvotes= 1 + ".$row['Upvotes'] . " WHERE VideoID=". $video;
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
