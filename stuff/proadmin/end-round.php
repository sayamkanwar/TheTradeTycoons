<?php
require_once('../includes/dbconnect.php');
session_start();


$query = "DELETE FROM offers";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  // header("Location: rounds.php?result=2");
}
else {
  echo "error: " . mysql_error();
}

$query = "DELETE FROM generalnotif";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  // header("Location: rounds.php");
}
else {
  echo "error: " . mysql_error();
}

$query = "DELETE FROM approvalnotif";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  // header("Location: rounds.php");
}
else {
  echo "error: " . mysql_error();
}

//Depriciation

$query1 = "SELECT * FROM players WHERE tradecounter <= 10";
$result1 = mysql_query($query1);
while ($row = mysql_fetch_assoc($result1)) {
$thisusername = $row['username'];
$tradecounter = $row['tradecounter'];

 $decrementval = 10;
 $query2 = "SELECT * FROM items WHERE username='{$thisusername}'";
 $result2 = mysql_query($query2);
 while ($row = mysql_fetch_assoc($result2)) {
 $itemval = $row['value'];

 $newval = $itemval - $decrementval;
 echo "Depriciation: " . $decrementval;


 $query = "UPDATE items SET value='{$newval}' WHERE username='{$thisusername}'";
 $result = mysql_query($query);
 if ($result) {
   // echo "Trade Item Updated Successfully (5)";
   // header("Location: rounds.php");
 }
 else {
   echo "error: " . mysql_error();
 }

}

}

//Case 1

$query1 = "SELECT * FROM players WHERE tradecounter >= 11 AND tradecounter <= 15";
$result1 = mysql_query($query1);
while ($row = mysql_fetch_assoc($result1)) {
$thisusername = $row['username'];
$tradecounter = $row['tradecounter'];

 $incrementval = 15;
 $query2 = "SELECT * FROM items WHERE username='{$thisusername}'";
 $result2 = mysql_query($query2);
 while ($row = mysql_fetch_assoc($result2)) {
 $itemval = $row['value'];

 $newval = $itemval + $incrementval;
 echo "Case 1: " . $incrementval;

 $query = "UPDATE items SET value='{$newval}' WHERE username='{$thisusername}'";
 $result = mysql_query($query);
 if ($result) {
   // echo "Trade Item Updated Successfully (5)";
   // header("Location: rounds.php");
 }
 else {
   echo "error: " . mysql_error();
 }

}

}


//Case 2

$query1 = "SELECT * FROM players WHERE tradecounter >= 16 AND tradecounter <= 20";
$result1 = mysql_query($query1);
while ($row = mysql_fetch_assoc($result1)) {
$thisusername = $row['username'];
$tradecounter = $row['tradecounter'];

 $incrementval = 20;
 $query2 = "SELECT * FROM items WHERE username='{$thisusername}'";
 $result2 = mysql_query($query2);
 while ($row = mysql_fetch_assoc($result2)) {
 $itemval = $row['value'];

 $newval = $itemval + $incrementval;
 echo "Case 2: " . $incrementval;

 $query = "UPDATE items SET value='{$newval}' WHERE username='{$thisusername}'";
 $result = mysql_query($query);
 if ($result) {
   // echo "Trade Item Updated Successfully (5)";
   // header("Location: rounds.php");
 }
 else {
   echo "error: " . mysql_error();
 }

}

}

//Case 3

$query1 = "SELECT * FROM players WHERE tradecounter >= 20";
$result1 = mysql_query($query1);
while ($row = mysql_fetch_assoc($result1)) {
$thisusername = $row['username'];
$tradecounter = $row['tradecounter'];

 $incrementval = 25;
 $query2 = "SELECT * FROM items WHERE username='{$thisusername}'";
 $result2 = mysql_query($query2);
 while ($row = mysql_fetch_assoc($result2)) {
 $itemval = $row['value'];
 echo "Case 3: " . $incrementval;

 $newval = $itemval + $incrementval;

 $query = "UPDATE items SET value='{$newval}' WHERE username='{$thisusername}'";
 $result = mysql_query($query);
 if ($result) {
   // echo "Trade Item Updated Successfully (5)";
   // header("Location: rounds.php");
 }
 else {
   echo "error: " . mysql_error();
 }

}

}



$query = "UPDATE roundstatus SET status='0'";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  header("Location: rounds.php?result=2");
}
else {
  echo "error: " . mysql_error();
}

 ?>
