<?php
require_once('../includes/dbconnect.php');
session_start();
$query = "UPDATE roundstatus SET status='1'";
$result = mysql_query($query);
if ($result) {
  // echo "Trade Item Updated Successfully (5)";
  header("Location: rounds.php?result=3");
}
else {
  echo "error: " . mysql_error();
}
 ?>
