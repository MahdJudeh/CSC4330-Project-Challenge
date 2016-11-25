<?php
ob_start();
require_once('./includes/db_connect.php');
if(isset($_POST['Login'])){
  $data_missing = array();

  if(empty($_POST['userLogin'])){
    $data_missing[] = 'username';
  }
  else{
    $username = $_POST['userLogin'];
  }
  if(empty($_POST['passwordLogin'])){
    $data_missing[] = 'password';
  }
  else{
    $password = $_POST['passwordLogin'];
  }
}
// $username = stripslashes($username);
// $password = stripslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);
$query = "SELECT Username, Password FROM User WHERE Username = '$username' AND Password = '$password' LIMIT 1";
$result =  mysqli_query($dbc, $query);

$row = mysqli_fetch_array($result);
if(($row['Username'] == $username) && ($row['Password'] == $password)){
  echo "You have successfully logged in.";
  header("Location: http://challengeme.life/index.php");
  exit();
}
else{
  echo "Invalid login information. ";
  if($row['Username'] == $username){
    echo "username Okay";
  }
  if($row['Password'] == $password){
    echo "[password okay]";
  }
  echo "hi";
  header("Location: ../../index.php");
  exit();
}
ob_end_flush();
?>
