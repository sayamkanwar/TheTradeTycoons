<?php
require_once('../includes/dbconnect.php');
session_start();

$query = "DELETE FROM tradelogs";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  header("Location: rounds.php?result=1");
}
else {
  echo "error: " . mysql_error();
}

$query = "UPDATE players SET tradecounter='0'";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  // header("Location: rounds.php");
}
else {
  echo "error: " . mysql_error();
}

 ?>
