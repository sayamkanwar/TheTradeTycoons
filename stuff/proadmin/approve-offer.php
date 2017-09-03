<?php
require_once('../includes/dbconnect.php');
if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}

if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}

if (isset($_GET['mitem1'])) {
  $mitem1 = $_GET['mitem1'];
}
if (isset($_GET['mitem2'])) {
  $mitem2 = $_GET['mitem2'];
}
if (isset($_GET['mitem3'])) {
  $mitem3 = $_GET['mitem3'];
}
if (isset($_GET['mitem4'])) {
  $mitem4 = $_GET['mitem4'];
}
if (isset($_GET['mitem5'])) {
  $mitem5 = $_GET['mitem5'];
}

if (isset($_GET['tusername'])) {
  $tusername = $_GET['tusername'];
}

if (isset($_GET['titem1'])) {
  $titem1 = $_GET['titem1'];
}
if (isset($_GET['titem2'])) {
  $titem2 = $_GET['titem2'];
}
if (isset($_GET['titem3'])) {
  $titem3 = $_GET['titem3'];
}
if (isset($_GET['titem4'])) {
  $titem4 = $_GET['titem4'];
}
if (isset($_GET['titem5'])) {
  $titem5 = $_GET['titem5'];
}

if (isset($_GET['musername'])) {
  $musername = $_GET['musername'];
}
// if (isset($_GET['mitem1'])) {
//   $mitem1 = $_GET['mitem1'];
// }
// if (isset($_GET['offerid'])) {
//   $offerid = $_GET['offerid'];
// }
$query = "UPDATE offers SET status='3' WHERE id='{$offerid}'";
$result = mysql_query($query);
if ($result) {
  echo "Record Updated Successfully";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$tusername}' WHERE name='{$mitem1}'";
$result = mysql_query($query);
if ($result) {
  echo "My Item Updated Successfully (1)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$tusername}' WHERE name='{$mitem2}'";
$result = mysql_query($query);
if ($result) {
  echo "My Item Updated Successfully (2)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$tusername}' WHERE name='{$mitem3}'";
$result = mysql_query($query);
if ($result) {
  echo "My Item Updated Successfully (3)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$tusername}' WHERE name='{$mitem4}'";
$result = mysql_query($query);
if ($result) {
  echo "My Item Updated Successfully (4)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$tusername}' WHERE name='{$mitem5}'";
$result = mysql_query($query);
if ($result) {
  echo "My Item Updated Successfully (5)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$musername}' WHERE name='{$titem1}'";
$result = mysql_query($query);
if ($result) {
  echo "Trade Item Updated Successfully (1)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$musername}' WHERE name='{$titem2}'";
$result = mysql_query($query);
if ($result) {
  echo "Trade Item Updated Successfully (2)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$musername}' WHERE name='{$titem3}'";
$result = mysql_query($query);
if ($result) {
  echo "Trade Item Updated Successfully (3)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$musername}' WHERE name='{$titem4}'";
$result = mysql_query($query);
if ($result) {
  echo "Trade Item Updated Successfully (4)";
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE items SET username='{$musername}' WHERE name='{$titem5}'";
$result = mysql_query($query);
if ($result) {
  echo "Trade Item Updated Successfully (5)";
}
else {
  echo "error: " . mysql_error();
}

$squery = "SELECT * FROM offers WHERE id='{$offerid}'";
$sresult = mysql_query($squery);
while ($row = mysql_fetch_assoc($sresult)) {
  $myitem1 = $row['myitem1'];
  $myitem2 = ", " . $row['myitem2'];
  $myitem3 = ", " . $row['myitem3'];
  $myitem4 = ", " . $row['myitem4'];
  $myitem5 = ", " . $row['myitem5'];
  if (empty($row['myitem1'])) {
    $myitem1 = "";
  }
  if (empty($row['myitem2'])) {
    $myitem2 = "";
  }
  if (empty($row['myitem3'])) {
    $myitem3 = "";
  }
  if (empty($row['myitem4'])) {
    $myitem4 = "";
  }
  if (empty($row['myitem5'])) {
    $myitem5 = "";
  }

  $tritem1 = $row['tradeitem1'];
  $tritem2 = ", " . $row['tradeitem2'];
  $tritem3 = ", " . $row['tradeitem3'];
  $tritem4 = ", " . $row['tradeitem4'];
  $tritem5 = ", " . $row['tradeitem5'];
  if (empty($row['tradeitem1'])) {
    $tritem1 = "";
  }
  if (empty($row['tradeitem1'])) {
    $tritem2 = "";
  }
  if (empty($row['tradeitem2'])) {
    $tritem3 = "";
  }
  if (empty($row['tradeitem3'])) {
    $tritem4 = "";
  }
  if (empty($row['tradeitem4'])) {
    $tritem5 = "";
  }
}

$query2 = "UPDATE items SET username='3' WHERE id='{$offerid}'";
$result2 = mysql_query($query2);
if ($result2) {
  // echo "Record Updated Successfully";
  header("location: approvals.php?result=1");
}
else {
  echo "error: " . mysql_error();
}

$forusername1 = $musername;
$forusername2 = $tusername;
$notifmessage1 = "Your trade with Team {$forusername2} for your item(s) {$myitem1}{$myitem2}{$myitem3}{$myitem4}{$myitem5} has been approved by the admin.";
$notifmessage2 = "Your trade with Team {$forusername1} for your item(s) {$tritem1}{$tritem2}{$tritem3}{$tritem4}{$tritem5} has been approved by the admin.";

$query3 = "INSERT INTO approvalnotif (forusername1,forusername2,message1,message2,status) VALUES ('$forusername1','$forusername2','$notifmessage1','$notifmessage2','1')";
$result3 = mysql_query($query3);
if ($result3) {
  // echo "Record Updated Successfully";
  // header("location: approvals.php?result=1");
}
else {
  // echo "error: " . mysql_error();
}

$user1items = $myitem1 . $myitem2 . $myitem3 . $myitem4 . $myitem5;
$user2items = $tritem1 . $tritem2 . $tritem3 . $tritem4 . $tritem5;

$query4 = "INSERT INTO tradelogs (username1,username2,user1items,user2items) VALUES ('$forusername1','$forusername2','$user1items','$user2items')";
$result4 = mysql_query($query4);
if ($result4) {
  // echo "Record Updated Successfully";
  // header("location: approvals.php?result=1");
}
else {
  // echo "error: " . mysql_error();
}
 ?>
