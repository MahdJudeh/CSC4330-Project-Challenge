<!DOCTYPE HTML>
<html>
<head>
  <title>ChallengeMe</title>
	<link href="../Stylesheets/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
		      <li><a class="signup text-right" href="#0">SIGNUP</a></li>
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
          <h2 class="modal-title text-center">Login</h2>
        </div>
        <div class="modal-body">
          <form action="login.php">
            <div class="form-group">
                <label for="emailBoxLogin">Email address</label>
                <input type="email" class="form-control" id="emailBoxLogin" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="passwordLogin">Password</label>
              <input type="password" class="form-control" id="passwordLogin" placeholder="Enter password" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- This is the modal for the signup -->
  <div class="modal fade" id="loginModal" tabindex="-1da" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title text-center">Login</h2>
        </div>
        <div class="modal-body">
          <form action="action_page.php">
            <div class="form-group">
                <label for="emailBoxLogin">Email address</label>
                <input type="email" class="form-control" id="emailBoxLogin" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="passwordLogin">Password</label>
              <input type="password" class="form-control" id="passwordLogin" placeholder="Enter password" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</body>
<html>