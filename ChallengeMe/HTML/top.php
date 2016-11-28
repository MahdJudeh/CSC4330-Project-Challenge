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
  <meta charset="utf-8"/>
  <title>ChallengeMe</title>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css"/>
  <link href="../Stylesheets/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
  <script src="./Scripts/JS/setactive.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
          <li><a href="index.php">HOT</a></li>
          <li class="active"><a href="#">TOP</a></li>
          <li><a href="new.php">NEW</a></li>
          <li><a href="#" data-toggle="modal" data-target="#ChallengeModal">CHALLENGE THEM</a></li>
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
    $queryC = "SELECT * FROM Challenge ORDER BY Points DESC";
    $resultC = mysqli_query($dbc, $queryC);
    $count = 0;
    $html = "";
    while(($rowC = mysqli_fetch_array($resultC)) && ($count < 10)){
      $html.= "<div class=\"challenge\">
              <div class=\"container\">
                <div class=\"row text-center\">
                  <div class=\"col-md-1 column\">

                  <form method=\"post\" action=\"./Scripts/php/upvoteC.php\">
                  <input type=\"hidden\" class=\"form-control\" name=\"ChallengeID\" value=\"". $rowC['ChallengeID'] ."\" required>
                  <button type=\"submit\" name=\"upvoteChallenge\" class=\"btn btn-default btn-sm\">
                  <span class=\"glyphicon glyphicon-chevron-up text-center\"></span></button>
                  </form>
                    <h2 class=\"text-center\">" .
                      $rowC['Points'] .
                    "</h2>
                    <form method=\"post\" action=\"./Scripts/php/downvoteC.php\">
                    <input type=\"hidden\" class=\"form-control\" name=\"ChallengeID\" value=\"". $rowC['ChallengeID'] ."\" required>
                    <button type=\"submit\" name=\"downvoteChallenge\" class=\"btn btn-default btn-sm\" from>
                    <span class=\"glyphicon glyphicon-chevron-down text-center\"></span></button>
                    </form>

                  </div>
                  <div class=\"col-md-10 column\">
                    <h1>" .
                      $rowC['Title'] .
                    "</h1>
                    <h4>" .
                    $rowC['Description'] .
                    "</h4>
                    <button data-toggle=\"collapse\" data-target=\"#ChallengeVideo".$rowC['ChallengeID']. "\">Videos</button>
                    <div class=\"collapse\" id=\"ChallengeVideo".$rowC['ChallengeID']. "\">";
                      $queryV = "SELECT * FROM Video WHERE ChallengeID =". $rowC['ChallengeID'];
                      $resultV = mysqli_query($dbc, $queryV);
                      $countV = mysqli_num_rows($resultV);
                      $active = "active";

                      $html.=  "<div id=\"myCarousel" .$rowC['ChallengeID'] ."\" class=\"newCarousel\">";
                              $i = 0;
                              while($rowV = mysqli_fetch_array($resultV)){
$vID = $rowV['VideoID'];
                                $html.=  "<div>
                                  <iframe width=\"600\" height=\"450\" src=\"https://www.youtube.com/embed/". $rowV['VideoLink'] ."\" frameborder=\"0\" allowfullscreen></iframe>
                                    <div>
                                    <form method=\"post\" action=\"./Scripts/php/upvoteV.php\">
                                    <input type=\"hidden\" class=\"form-control\" name=\"VideoID\" value=\"". $vID ."\" required>
                                    <button type=\"submit\" name=\"upvoteVideo\" class=\"btn btn-default btn-sm\">
                                    <span class=\"glyphicon glyphicon-chevron-up text-center\"></span></button>
                                    </form>
                                      <h2 class=\"text-center\">";
                                        $points = (int)$rowV['Upvotes'] - (int)$rowV['Downvotes'];
                                        $html .= $points . " By:" . $user .
                                      "</h2>
                                      <form method=\"post\" action=\"./Scripts/php/downvoteV.php\">
                                      <input type=\"hidden\" class=\"form-control\" name=\"VideoID\" value=\"". $vID ."\" required>
                                      <button type=\"submit\" name=\"downvoteVideo\" class=\"btn btn-default btn-sm\">
                                      <span class=\"glyphicon glyphicon-chevron-down text-center\"></span></button>
                                      </form>
                                    </div>
                                 </div>";


                            }
                        $html.=  "</div>
                        </div>
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
                    <h3 class=\"modal-title text-left\">Submit Video</h3>
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
    echo $html;
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
    <script src="./Scripts/JS/autoscrollT.js"></script>
    <div class="loader"></div>
  </div>
</body>
</html>
