<?php
    session_start();
    require_once('./Scripts/php/includes/db_connect.php');
    $queryU = "SELECT Username FROM User WHERE UserID =". $_SESSION['user'];
    $resultU = mysqli_query($dbc, $queryU);
    $row = mysqli_fetch_array($resultU);
    $userID = $_SESSION['user'];
    $user = $row['Username'];

 ?>
<!DOCTYPE html>
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
          <li><a href="#" data-toggle="modal" data-target="#ChallengeModal">SUBMIT</a></li>
        </ul>
        <?php
          if(!($_SESSION['login']== 'true') || ($_SESSION['login'] == null)){
          echo "<ul class=\"nav navbar-nav navbar-right\">
            <li><a class=\"login text-right\" href=\"#0\" data-toggle=\"modal\" data-target=\"#loginModal\">LOGIN</a></li>
  		      <li><a class=\"signup text-right\" href=\"#0\" data-toggle=\"modal\" data-target=\"#signupModal\">SIGNUP</a></li>
          </ul>";
          }
          else{
            echo "<ul class=\"nav navbar-nav navbar-right\">
              <li><a class=\"text-right\" href=\"#0\">Hi ".$user ."</a></li>
    		      <li><a class=\"logout text-right\" href=\"./Scripts/php/logout.php\">LOGOUT</a></li>
            </ul>";
          }
        ?>
      </div>
    </div>
  </nav>
  <div class="mainBody">
    <?php
    $queryC = "SELECT * FROM Challenge";
    $resultC = mysqli_query($dbc, $queryC);
    $count = 0;
    while(($rowC = mysqli_fetch_array($resultC)) && ($count < 10)){
      echo "<div class=\"challenge\">
              <div class=\"container\">
                <div class=\"row text-center\">
                  <div class=\"col-md-1 column\">
                  <button type=\"button\" class=\"btn btn-default btn-sm\">
                  <span class=\"glyphicon glyphicon-chevron-up text-center\"></span></button>
                    <h2 text-center>" .
                      $rowC['Point Worth'] .
                    "</h2>
                    <button type=\"button\" class=\"btn btn-default btn-sm\">
                    <span class=\"glyphicon glyphicon-chevron-down text-center\"></span></button>

                  </div>
                  <div class=\"col-md-10 column\">
                    <h1>" .
                      $rowC['Title'] .
                    "</h1>
                    <h4>" .
                    $rowC['Description'] .
                    "</h4>
                  </div>
                  <div class=\"col-md-1 column\" style=\"padding: 0px\">
                    <button type=\"button\" class=\"btn btn-default btn-md\" style=\"padding: 0px; width: 98%; height: 20%\" data-toggle=\"modal\" data-target=\"#challengeModal".$rowC['ChallengeID']. "\"><span>ACCEPT</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"challengeModal".$rowC['ChallengeID']. "\" tabindex=\"-1da\" role=\"dialog\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h3 class=\"modal-title text-left\">Login</h3>
                  </div>
                  <div class=\"modal-body\">
                    <form action=\"./Scripts/php/submitVideo.php\" method=\"post\">
                      <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"videoLink\" placeholder=\"Youtube Link\" required>
                      </div>
                      <div class=\"form-group\">
                        <input type=\"hidden\" class=\"form-control\" name=\"ChallengeID\" value=\"". $rowC['ChallengeID'] ."\" required>
                      </div>
                      <div class=\"form-group\">
                        <input type=\"hidden\" class=\"form-control\" name=\"UserID\" value=\"". $user ."\" required>
                      </div>
                      <div>
                        <input type=\"submit\" name=\"Video\" id=\"videoButton\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>";
      $count++;
    }
     ?>
  </div>

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
              <input type="text" class="form-control" name="userLogin" placeholder="username" required>
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
              <input type="text" class="form-control" name="userNameSignup" placeholder="Enter username" maxlength="15" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="emailBoxSignup" placeholder="Enter email"  maxlenght ="30" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordSignup" placeholder="Enter password"  maxlenght ="20"  required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="passwordVerification" placeholder="Re-enter password"  maxlenght ="20" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="DOB" placeholder="Enter Date of Birth (ex. MM/DD/YYYY)"  required>
            </div>
            <div>
              <input type="submit" value="Signup" name="Signup" id="signupButton">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="signupButtonClose">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- This is the modal for the submitting Challenges -->
  <div class="modal fade" id="ChallengeModal" tabindex="-1da" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-left">SUBMIT CHALLENGE</h3>
        </div>
        <div class="modal-body">
          <form action="./Scripts/php/submitChallenge.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="TitleChallenge" placeholder="Title" maxlength="100" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="DescriptionChallenge" placeholder="Description"  maxlength="500" required></textarea>
            </div>
            <div>
              <input type="submit" value="Challenge" name="Challenge" id="ChallengeButton">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="ChallengeButtonClose">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom">
    <script src="./Scripts/JS/autoscroll.js"></script>
    <div class="loader"></div>
  </div>

</body>
</html>
