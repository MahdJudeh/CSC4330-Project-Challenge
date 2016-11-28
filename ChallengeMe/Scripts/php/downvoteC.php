<?php
ob_start();
session_start();
echo "hi";
require_once('./includes/db_connect.php');
if($_SESSION['login'] == 'true'){
  if(isset($_POST['downvoteChallenge'])){
    $challenge = $_POST['ChallengeID'];
  }
  $query = "SELECT Upvoted, Downvoted, Points from Challenge where ChallengeID=". $challenge;
  $result = mysqli_query($dbc, $query);
  $row = mysqli_fetch_array($result);
  if($row['Upvoted'] == null && $row['Downvoted'] == null){
    $sqlV = "UPDATE Challenge SET Downvoted = 1, Points= ".$row['Points'] . " - 1 WHERE ChallengeID=". $challenge;
    mysqli_query($dbc, $sqlV);
  }
  else if($row['Upvoted'] == 1 && $row['Downvoted'] == 0){
      $sqlV = "UPDATE Challenge SET Upvoted = 0, Downvoted = 1, Points= ".$row['Points'] . " - 1 WHERE ChallengeID=". $challenge;
      mysqli_query($dbc, $sqlV);

  }
  else if($row['Upvoted'] == 1 && $row['Downvoted'] == null){
      $sqlV = "UPDATE Challenge SET Upvoted = 0, Downvoted = 1, Points= ".$row['Points'] . " - 1 WHERE ChallengeID=". $challenge;
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
