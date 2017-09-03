<?php
require_once('../includes/dbconnect.php');
session_start();
if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}

$sql = "SELECT * FROM offers WHERE id='{$offerid}'";
$sqlres = mysql_query($sql);
while ($row = mysql_fetch_assoc($sqlres)) {
$musername = $row['username'];
$tusername = $row['tradeusername'];
$mitem1 = $row['myitem1'];
$mitem2 = $row['myitem2'];
$mitem3 = $row['myitem3'];
$mitem4 = $row['myitem4'];
$mitem5 = $row['myitem5'];
$titem1 = $row['tradeitem1'];
$titem2 = $row['tradeitem2'];
$titem3 = $row['tradeitem3'];
$titem4 = $row['tradeitem4'];
$titem5 = $row['tradeitem5'];


$query = "SELECT * FROM players WHERE username='{$musername}'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$tradesno1 = $row['tradecounter'];
$increasedtrades = $tradesno1 + 1;
$query2 = "UPDATE players SET tradecounter='{$increasedtrades}' WHERE username='{$musername}'";
$result2 = mysql_query($query2);
if ($result2) {
  // echo "Record Updated Successfully";
  // header("location: dash.php");
  echo "Auto Trade Increase Working for Team 1";
}
else {
  echo "Auto Trade Increase not working for Team 1, error: " . mysql_error();
}
}


$query = "SELECT * FROM players WHERE username='{$tusername}'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$tradesno1 = $row['tradecounter'];
$increasedtrades = $tradesno1 + 1;
$query2 = "UPDATE players SET tradecounter='{$increasedtrades}' WHERE username='{$tusername}'";
$result2 = mysql_query($query2);
if ($result2) {
  // echo "Record Updated Successfully";
  // header("location: dash.php");
  echo "Auto Trade Increase Working for Team 1";
}
else {
  echo "Auto Trade Increase not working for Team 1, error: " . mysql_error();
}
}

if ($musername == $_SESSION['username']) {

  $query = "SELECT * FROM items WHERE username='{$musername}' AND name!='{$mitem1}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$musername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$musername}' AND name!='{$mitem2}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$musername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$musername}' AND name!='{$mitem3}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$musername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$musername}' AND name!='{$mitem4}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$musername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$musername}' AND name!='{$mitem5}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$musername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

}

if ($tusername == $_SESSION['username']) {

  $query = "SELECT * FROM items WHERE username='{$tusername}' AND name!='{$titem1}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$tusername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$tusername}' AND name!='{$titem2}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$tusername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$tusername}' AND name!='{$titem3}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$tusername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$tusername}' AND name!='{$titem4}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$tusername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

  $query = "SELECT * FROM items WHERE username='{$tusername}' AND name!='{$titem5}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
  $iteminitval = $row['value'];
  $itemsecondval = $row['secondincrementvalue'];
  $itemfinalval = $iteminitval + $itemsecondval;
  $query2 = "UPDATE items SET value='{$itemfinalval}' WHERE username='{$tusername}'";
  $result2 = mysql_query($query2);
  if ($result2) {
    echo "Auto Item Secondary Value Increase Working for Team 1";
  }
  else {
    echo "Auto Item Secondary Value Increase not Working for Team 1, error: " . mysql_error();
  }
  }

}

}

$query = "SELECT * FROM players WHERE username='{$musername}'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$tradesno1 = $row['tradecounter'];
$increasedtrades = $tradesno1 + 1;

}

// $idquery = "SELECT * FROM items WHERE id='{$offerid}'";
// $idres = mysql_query($idquery);
// while ($row = mysql_fetch_assoc($idres)) {
// $mitem1 = $row['myitem1'];
// $mitem2 = $row['myitem2'];
// $mitem3 = $row['myitem3'];
// $mitem4 = $row['myitem4'];
// $mitem5 = $row['myitem5'];
// $titem1 = $row['tradeitem1'];
// $titem2 = $row['tradeitem2'];
// $titem3 = $row['tradeitem3'];
// $titem4 = $row['tradeitem4'];
// $titem5 = $row['tradeitem5'];
// }


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

$query2 = "UPDATE items SET username='".$_SESSION['username']."' WHERE id='{$offerid}'";
$result2 = mysql_query($query2);
if ($result2) {
  // echo "Record Updated Successfully";
  header("location: dash.php?result=5");
  echo "Auto Admin Approval Working";
}
else {
  echo "Auto Admin Approval not working, error: " . mysql_error();
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

$query = "SELECT * FROM items";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$itemname = $row['name'];

$query2 = "SELECT * FROM items WHERE name='{$itemname}'";
$result2 = mysql_query($query2);
while ($row = mysql_fetch_assoc($result2)) {
$itemowner = $row['username'];
$initialval = $row['value'];
$incrementval = $row['incrementvalue'];
echo $incrementval;
$increasedval = $initialval + $incrementval;
$query3 = "UPDATE items SET value='{$increasedval}' WHERE name='{$itemname}'";
$result3 = mysql_query($query3);
if ($result3) {
  // echo "Record Updated Successfully";
  // header("location: dash.php");
  echo "Auto Admin Value Increase Working";
}
else {
  echo "Auto Admin Value Increase not working, error: " . mysql_error();
}



}

}


// $query2 = "UPDATE items SET username='3' WHERE id='{$offerid}'";
// $result2 = mysql_query($query2);
// if ($result2) {
//   // echo "Record Updated Successfully";
//   header("location: dash.php");
//   echo "Auto Admin Approval Working";
// }
// else {
//   echo "Auto Admin Approval not working, error: " . mysql_error();
// }







 ?>
