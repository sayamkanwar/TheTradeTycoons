<?php
require_once('../includes/dbconnect.php');
if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}
$query = "UPDATE offers SET status='2' WHERE id='{$offerid}'";
$result = mysql_query($query);
if ($result) {
  header("location: auto-admin.php?offerid={$offerid}");
  // echo "success";
}
else {
  echo "error: " . mysql_error();
}

$query2 = "SELECT * FROM offers WHERE id='{$offerid}'";
$result2 = mysql_query($query2);
while ($row = mysql_fetch_assoc($result2)) {
$byusername = $row['tradeusername'];
$forusername = $row['username'];
}

$msg = "Your offer has been accepted by Team {$byusername}.";
$query3 = "INSERT INTO generalnotif (forusername,message) VALUES ('$forusername','$msg')";
if (mysql_query($query3)) {
  // echo "ho gya";
}
else {
  echo "error creating decline notif! " . mysql_error();
}

 ?>
