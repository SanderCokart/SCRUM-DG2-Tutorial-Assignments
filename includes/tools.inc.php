<?php
// function for checking if the id exists
function checkExistanceId($idToCheck, $table) {
  include 'db.inc.php';
  if ($table == "clubs") {
    $sql = "SELECT id FROM clubs WHERE removed=0";
  } else if ($table == "games") {
    $sql = "SELECT id FROM games";
  }
  $_SESSION['existingId'] = FALSE; // standard value is false
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) { // check if id exists in
    if ($_POST[$idToCheck] == $row['id']) { // the id exists in table
      $_SESSION['existingId'] = TRUE;
      return true;
    }
  }
}


function wrongId() {
  die ("The id doesn't exist or the id field has been left empty <br> <img src=https://accountingpl.us/assets/images/screenshots/treeguy.jpg width='500'>");
}


 ?>
