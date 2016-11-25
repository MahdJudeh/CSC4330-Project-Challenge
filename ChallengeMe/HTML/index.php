
<?php
session_start();
 ?>
<html>
<head>
  <title>ChallengeMe</title>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="../Stylesheets/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

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
          <li class="active"><a href="#">HOT</a></li>
          <li><a href="#">TOP</a></li>
          <li><a href="#">NEW</a></li>
          <li><a href="#">SUBMIT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class="login text-right" href="#0" data-toggle="modal" data-target="#loginModal">LOGIN</a></li>
		      <li><a class="signup text-right" href="#0" data-toggle="modal" data-target="#signupModal">SIGNUP</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- This is the modal for the login -->
  <div class="modal fade" id="loginModal" tabindex="-1da" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-left">Login</h3>
        </div>
        <div class="modal-body">
          <form action="./Scripts/php/login.php" method="post">
            <div class="form-group">
              <input type="test" class="form-control" name="userLogin" placeholder="username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordLogin" placeholder="password" required>
            </div>
            <div>
              <input type="submit" name="Login" id="loginButton">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- This is the modal for the signup -->
  <div class="modal fade" id="signupModal" tabindex="-1da" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-left">Signup</h3>
        </div>
        <div class="modal-body">
          <form action="./Scripts/php/signup.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="userNameSignup" placeholder="Enter username" value="" maxlength="15" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="emailBoxSignup" placeholder="Enter email" value="" maxlenght ="30" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordSignup" placeholder="Enter password" value="" maxlenght ="20"  required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordVerification" placeholder="Re-enter password" value="" maxlenght ="20" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="DOB" placeholder="Enter Date of Birth (ex. MM/DD/YYYY)" value="" required>
            </div>
            <div>
              <input type="submit" value="Signup" name="Signup" id="signupButton">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="signupButtonClose">Close</button>
            </div>
          </form>
        </div>
        <script src="/Scripts/JS/verifySignup.js"></script>
      </div>
    </div>
  </div>

</body>
<html>
