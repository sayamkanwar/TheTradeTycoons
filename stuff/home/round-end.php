<?php require_once('../includes/dbconnect.php'); ?>
<?php
session_start();
 if (!isset($_SESSION['username'])) {
  header("Location: ../index.php?msg=2");
 }
 else {
  echo "";
 }

 $query = "SELECT * FROM roundstatus";
 $result = mysql_query($query);
 while ($row = mysql_fetch_assoc($result)) {
  $roundstatus = $row['status'];
  if ($roundstatus == 1) {
    header("location: dash.php");
  }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Round Ended</title>
    <link rel="stylesheet" href="../style.css" type="text/css">
    <style media="screen">
      body {
        width: 100%;
      }
      nav {
        position: fixed;
        top: 0;
      }

      .main-heading {
        margin-top: 120px;
      }
    </style>
  </head>
  <body>
    <center>
      <br><br>
    <h1 class="main-heading">Round Ended</h1>
    <br><br>
<p>This round has ended, Please wait for the next round to begin! :)</p>
  </center>
  </body>
</html>
