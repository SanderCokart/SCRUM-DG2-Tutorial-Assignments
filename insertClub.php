<?php
include_once "includes/db.inc.php";

if (isset($_POST['clubName'])) {
  $clubName = $_POST['clubName'];
  echo $clubName;
  $conn->query("INSERT INTO clubs (club_name) VALUES ('$clubName')"); // Query to add the club
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <div id="insert">
        <form action="" method="post">
          <fieldset>
            <legend> Voer de clubnaam in </legend>
            <input type="text" name="clubName" placeholder="Insert name">
            <input type="submit">
          </fieldset>
        </form>
      </div>
    </body>
</html>