<?php
ob_start();
require_once('./includes/db_connect.php');


if(isset($_POST['Signup'])){
$username = $_POST['userNameSignup'];
$email = $_POST['emailBoxSignup'];
$password = $_POST['passwordSignup'];
$passwordV = $_POST['passwordVerification'];
$dob = $_POST['DOB'];
}


$queryUser = "SELECT Username FROM User WHERE Username = '$username' LIMIT 1";
$queryEmail = "SELECT  Email FROM User WHERE Email = '$email' LIMIT 1";
$result1 =  mysqli_query($dbc, $queryUser);
$result2 = mysqli_query($dbc, $queryEmail);


$currentdate = time();
$dob = strtotime(date("Y-m-d",strtotime($dob)));

$oldEnough = ($currentdate-$dob)/365.25/24/60/60;

$rowUser = mysqli_fetch_array($result1);
$rowEmail = mysqli_fetch_array($result2);

if($passwordV == $password){
   if(($rowUser['Username'] != $username)){
     if(($rowEmail['Email'] != $email)){
       if($oldEnough>= 18){
         $query = "INSERT INTO User (Email, Username, Password, DOB) VALUES (?, ?, ?, ?)";
         $stmt = mysqli_prepare($dbc, $query);
         mysqli_stmt_bind_param($stmt, "ssss", $email, $username, $password, $dob);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_close($stmt);
         echo "You have successfully logged in.";
         header("Location: http://challengeme.life/index.php");
         $_SESSION['login'] = true;
         exit();
       }
     }
   }
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
<body>

<!-- This is the header -->
  <div class="header">
    <h1>Challenge Me</h1>
  </div>
<!-- This is the navigation bar --> -->
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
          <li><a class="login text-right" href="login.php">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </nav>


      <div class="container">
        <div id="headerLogin" style="color: #ffffff;">
          <h3 class="text-center" >SIGNUP</h3>
        </div>
        <div class="modal-body">
          <form action="signup.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="userNameSignup" placeholder="Enter username" value="" maxlength="15" required>
            </div>
            <?php
           if($rowUser['Username'] == $username){
              echo "<p style=\"color: #ffffff;\" class=\"text-center\">
               FAILED TO CREATE ACCOUNT: USERNAME ALREADY EXISTS
              </p>";
            }
            ?>
            <div class="form-group">
              <input type="email" class="form-control" name="emailBoxSignup" placeholder="Enter email" value="" maxlenght ="30" required>
            </div>
            <?php
            if($rowEmail['Email'] == $email){
              echo "<p style=\"color: #ffffff;\" class=\"text-center\">
                FAILED TO CREATE ACCOUNT: EMAIL ALREADY IN SYSTEM
              </p>";
            }
            ?>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordSignup" placeholder="Enter password" value="" maxlenght ="20"  required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordVerification" placeholder="Re-enter password" value="" maxlenght ="20" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="DOB" placeholder="Enter Date of Birth (ex. MM/DD/YYYY)" value="" required>
            </div>
            <div>
              <input type="submit" value="Signup" name="Signup" id="signupButton">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="signupButtonClose">Close</button>
            </div>
          </form>
        </div>
        <script src="/Scripts/JS/verifySignup.js"></script>
      </div>




</body>
<html>
