<?php
require_once('./includes/db_connect.php');
$queryC = "SELECT SubmissionTime, Points, Locked, ChallengeID FROM Challenge";
$resultC = mysqli_query($dbc, $queryC);

while($rowC = mysqli_fetch_array($resultC)){
  $time = time() - strtotime($rowC['SubmissionTime']) - 25200;
  if($time >= 3600 && $rowC['Locked'] == 0){
    $sqlV = "UPDATE Video SET Points=".$rowC['Points'] . " WHERE ChallengeID=". $rowC['ChallengeID'];
    mysqli_query($dbc, $sqlV);
    $sqlC = "UPDATE Challenge SET Locked=1 WHERE ChallengeID=". $rowC['ChallengeID'];
    mysqli_query($dbc, $sqlC);
    echo "hi <br />";
  }
}
$queryV = "SELECT Upvotes, Downvotes, Succeeded, UserID, Points, UserGivenPoints, VideoID FROM Video";
$resultV = mysqli_query($dbc, $queryV);

while($rowV = mysqli_fetch_array($resultV)){
  echo $rowV['Upvotes'] -$rowV['Downvotes'];
  if($rowV['Upvotes'] -$rowV['Downvotes']>=1){
    $sqlV = "UPDATE Video SET Succeeded=1 WHERE VideoID =" .$rowV['VideoID'];
    mysqli_query($dbc, $sqlV);
    echo "hiv2 <br />";
  }
  else if($rowV['Upvotes'] -$rowV['Downvotes']<1){
    $sqlV = "UPDATE Video SET Succeeded=0 WHERE VideoID =". $rowV['VideoID'];
    mysqli_query($dbc, $sqlV);
  }
  if($rowV['Succeeded']== 1){
    $point = $rowV['Points'];
    $sqlU = "UPDATE User SET Points= Points + ". $point . " WHERE UserID =". $rowV['UserID'];
    mysqli_query($dbc, $sqlU);
    $sqlV = "UPDATE Video SET UserGivenPoints=1 WHERE VideoID =" .$rowV['VideoID'];
    mysqli_query($dbc, $sqlV);
    echo "hi v3<br />";
  }
}
?>
