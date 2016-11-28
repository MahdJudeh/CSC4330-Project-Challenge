<?php
ob_start();
session_start();
echo "hi";
require_once('./includes/db_connect.php');
if($_SESSION['login'] == 'true'){
  if(isset($_POST['Challenge'])){
    $title = $_POST['TitleChallenge'];
    $description = $_POST['DescriptionChallenge'];
  }
  $query = "INSERT INTO Challenge (Title, Description, UserID) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($dbc, $query);
  mysqli_stmt_bind_param($stmt, "ssi", $title, $description, $_SESSION['user']);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  echo "You have successfully submitted a challenge.";
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
