<?php
ob_start();
session_start();
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

$query = "SELECT Username, Password FROM User WHERE Username = '$username' AND Password = '$password' LIMIT 1";
$result =  mysqli_query($dbc, $query);

$row = mysqli_fetch_array($result);
if(($row['Username'] == $username) && ($row['Password'] == $password)){
  echo "You have successfully logged in.";
  header("Location: http://challengeme.life/index.php");
  $_SESSION['login'] = true;
  exit();
}
ob_end_flush();
?>
<html>
<head>
  <title>ChallengeMe</title>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="../../Stylesheets/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body onload="process()">

<!-- This is the header -->
  <div class="header">
    <h1>Challenge Me</h1>
  </div>
<!-- This is the navigation bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="../../index.php">HOT</a></li>
          <li><a href="#">TOP</a></li>
          <li><a href="#">NEW</a></li>
          <li><a href="#">SUBMIT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
		      <li><a class="signup text-right" href="signup.php">SIGNUP</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- This is the modal for the login -->
  <div class="container">
        <div id="headerLogin" style="color: #ffffff;">
          <h3 class="text-center" >LOGIN</h3>
        </div>
        <div class="body">
          <form action="login.php" method="post">
            <div class="form-group">
              <input type="test" class="form-control" name="userLogin" placeholder="username" required maxlength="15" size="20">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordLogin" placeholder="password" required maxlenght ="20" size="25"><br />
              <p style="color: #ffffff;" class="text-center">
                FAILED TO LOGIN: Username or Password incorrect
              </p>
            </div>
            <div class="text-center">
              <input type="submit" name="Login" id="loginButton">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



</body>
<html>
