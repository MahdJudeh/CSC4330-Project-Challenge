<?php
echo "hi";
require_once('./includes/db_connect.php');
echo "hi";

$query = "SELECT * FROM `User`";
$result = mysqli_query($dbc, $query) OR DIE("Didn't work" );
echo "hi";

if(isset($_POST['Signup'])){
  $data_missing = array();

  if(empty($_POST['usernameSignup'])){
    $data_missing[] = 'username';
  }
  else{
    $username = $_POST['usernameSignup'];
  }
  if(empty($_POST['emailSignup'])){
    $data_missing[] = 'email';
  }
  else{
    $email = $_POST['emailSignup'];
  }
  if(empty($_POST['passwordSignup'])){
    $data_missing[] = 'password';
  }
  else{
    $password = $_POST['passwordSignup'];
  }
  if(empty($_POST['passwordVerification'])){
    $data_missing[] = 'password Verification';
  }
  else{
    $passwordV = $_POST['passwordVerificaion'];
  }
  if(empty($_POST['DOB'])){
    $data_missing[] = 'Date of Birth';
  }
  else{
    $dob = $_POST['DOB'];
  }
}
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


if(empty($data_missing)){
 $emailAlreadyin = false;
 $userNameAlreadyIn = false;
  while ($row = mysqli_fetch_array($result)) {
    if($row[1] == $email){
      $emailAlreadyin = true;
    }
    if($row[2] == $email){
      $userNameAlreadyIn = true;
    }
  }
  if($userNameAlreadyIn || $emailAlreadyin){
    header('Loaction: ../../index.php');
  }
}


if($result){
  echo "inside result";
  while ($row = mysqli_fetch_array($result)) {
    for ($i = 0; $i < sizeof($row); $i++){
      echo $row[$i] . " ";
    }

  }
}
else{
  echo "didn't work";
}
echo "hello";
 ?>
