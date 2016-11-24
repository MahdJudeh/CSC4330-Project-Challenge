<?php
echo "hi";
require_once('./includes/db_connect.php');
echo "hi";

$query = "SELECT * FROM `User`";
$result = mysqli_query($dbc, $query) OR DIE("Didn't work" );
echo "hi";
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
