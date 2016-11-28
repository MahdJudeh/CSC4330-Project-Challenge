<?php
ob_start();
session_start();
require_once('./includes/db_connect.php');
if($_SESSION['login'] == 'true'){
  if(isset($_POST['Video'])){
    parse_str(parse_url($_POST['videoLink'], PHP_URL_QUERY), $m);
    $youtubeUrl = $m['v'];
    echo $youtubeUrl;
    $youtubeUrl = $m['v'];
    $challengeID = (int)$_POST['ChallengeID'];
    $user = $_SESSION['user'];
    $query = "INSERT INTO Video (VideoLink, ChallengeID, UserID) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "sii", $youtubeUrl, $challengeID, $user);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "You have successfully submitted a challenge.";
    echo $youtubeUrl;
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
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
