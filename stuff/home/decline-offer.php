<?php
require_once('../includes/dbconnect.php');
if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}

$query = "UPDATE offers SET status='4' WHERE id='{$offerid}'";
$result = mysql_query($query);
if ($result) {
  header("location: dash.php?result=3");
  // echo "success";
}
else {
  echo "error: " . mysql_error();
}

$query = "SELECT * FROM offers WHERE id='{$offerid}'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$byusername = $row['tradeusername'];
$forusername = $row['username'];
}
$msg = "Your offer has been declined by Team {$byusername}.";
$query2 = "INSERT INTO generalnotif (forusername,message) VALUES ('$forusername','$msg')";
if (mysql_query($query2)) {
  // echo "ho gya";
}
else {
  echo "error creating decline notif! " . mysql_error();
}
 ?>
