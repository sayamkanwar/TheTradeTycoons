<?php
require_once('../includes/dbconnect.php');
if(isset($_GET['notifid'])) {
  $notifid = $_GET['notifid'];
}

$query = "DELETE FROM notifications WHERE id='{$notifid}'";
$result = mysql_query($query);
if ($result) {
  header("location: dash.php");
  // echo "success";
}
else {
  echo "error: " . mysql_error();
}
 ?>
