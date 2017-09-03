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
    <h1 class="main-heading">Result</h1>
    <br><br>
<table border="1" cellspacing="0" cellpadding="20">
  <tr>
  <th>S. No.</th>
  <th>Player</th>
  <th>Trade Points</th>
</tr>
<?php
$sno = 1;
$query = "SELECT * FROM players WHERE usertype=1";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
 $player = $row['username'];
 $query2 = "SELECT SUM(value) as totaltradepoints FROM items WHERE username='{$player}' ORDER BY SUM(value) desc";
 $result2 = mysql_query($query2);
 while ($row = mysql_fetch_assoc($result2)) {
  $totaltradepoints = $row['totaltradepoints'];
  echo "<tr>
  <td>{$sno}</td>
        <td>{$player}</td>
        <td>{$totaltradepoints}</td>
       </tr>";
  }

$sno++;
 }

 ?>

</table>
  </center>
  </body>
</html>
