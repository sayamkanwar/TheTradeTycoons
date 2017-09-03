<?php require_once('../includes/dbconnect.php'); ?>
<?php
session_start();
 if (!isset($_SESSION['username'])) {
  header("Location: ../index.php?msg=2");
 }
 else {
  echo "";
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMIN PANEL</title>
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
      <nav>
        <a href="logout.php" id="l4">LOGOUT</a>
        <a href="rounds.php">ROUNDS</a>
        <a href="items.php">ITEMS</a>
        <a href="admin.php">HOME</a>
      </nav>
      <br><br>
      <br><br>
      <br><br>
      <?php
      if (isset($_GET['result'])) {
        $res = $_GET['result'];
        if ($res == 2) {
          echo "<p class=\"success-msg\">Round Ended!</p>";
        }
        elseif ($res == 3) {
          echo "<p class=\"success-msg\">Round Started!</p>";
        }
        elseif ($res == 1) {
          echo "<p class=\"success-msg\">Trade Logs Cleared!</p>";
        }
      }
      ?>
    <h1 class="main-heading" style="margin-top:50px;">Rounds</h1>
    <br><br>
    <?php
    $query = "SELECT * FROM roundstatus";
    $result = mysql_query($query);
    while ($row = mysql_fetch_assoc($result)) {
    $roundstatus = $row['status'];
    if ($roundstatus == 1) {
      echo "<a class='admin-button' href='end-round.php'>End Round</a>";
      echo "<a class='admin-button' href='clear-logs.php'>Clear Logs</a>";
    }
    elseif ($roundstatus == 0) {
      echo "<a class='admin-button' href='clear-logs.php'>Clear Logs</a>";
      echo "<a class='admin-button' href='start-round.php'>Start Round</a>";
    }
  }
    ?>
  </center>
  </body>
</html>
