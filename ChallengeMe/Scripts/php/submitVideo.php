<?php
ob_start();
session_start();
require_once('./includes/db_connect.php');
if($_SESSION['login'] == 'true'){
  if(isset($_POST['Video'])){
    $youtubeUrl = $_POST['videoLink'];
    $challengeID = (int)$_POST['ChallengeID'];
    $user = $_SESSION['user'];
  }
  $query = "INSERT INTO Video (VideoLink, ChallengeID, UserID) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($dbc, $query);
  mysqli_stmt_bind_param($stmt, "sii", $youtubeUrl, $challengeID, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  echo "You have successfully submitted a challenge.";
  header("Location: http://challengeme.life/index.php");
  exit();
}
else{
  echo "hi";
  unset($_POST);
  header("Location: http://challengeme.life/Scripts/php/login.php");
  exit();
}
ob_end_flush();
?>
