<<?php
  require_once('./includes/db_connect.php');
  $load = strip_tags($_POST['load'])*10;
  echo $load;

  $queryC = "SELECT * FROM Challenge LIMIT ".$load.", 10";
  $resultC = mysqli_query($dbc, $queryC);
  $html = '';
  while(($rowC = mysqli_fetch_array($resultC))){
     $html .= "<div class=\"challenge\">
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
                  <button data-toggle=\"collapse\" data-target=\"#ChallengeVideo".$rowC['ChallengeID']. "\">Videos</button>
                  <div class=\"collapse\" id=\"ChallengeVideo".$rowC['ChallengeID']. "\">";
                    $queryV = "SELECT * FROM Video WHERE ChallengeID =". $rowC['ChallengeID'];
                    $resultV = mysqli_query($dbc, $queryV);
                    $countV = mysqli_num_rows($resultV);
                    $active = "active";

                    $html .= "<div id=\"myCarousel" .$rowC['ChallengeID'] ."\" class=\"newCarousel\">";
                            $i = 0;
                            while($rowV = mysqli_fetch_array($resultV)){
                              if($i = 0){

                             $html .= "<div>
                                    <iframe width=\"600\" height=\"450\" src=\"https://www.youtube.com/embed/". $rowV['VideoLink'] ."\" frameborder=\"0\" allowfullscreen></iframe>
                                   </div>";
                            }
                            else{
                              $html .= "<div>
                                <iframe width=\"600\" height=\"450\" src=\"https://www.youtube.com/embed/". $rowV['VideoLink'] ."\" frameborder=\"0\" allowfullscreen></iframe>
                               </div>";
                            }
                            if($countV == 0){
                                  $html .= "<div>
                                     <p>
                                     THIS IS EMPTY;
                                     </p>
                                    </div>";
                            }

                          }
                      $html .= "</div>
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
                    <div>
                      <input type=\"submit\" name=\"Video\" id=\"videoButton\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>";
  }
echo $html;
exit;


 ?>
