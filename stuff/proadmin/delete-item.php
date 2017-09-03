<?php
require_once('../includes/dbconnect.php');
if (isset($_GET['itemid'])) {
  $itemid = $_GET['itemid'];
}
$query = "DELETE FROM items WHERE id='{$itemid}'";
$result = mysql_query($query);
if ($result) {
	header("Location: items.php?msg=3");
	//  echo "success";
}
else {
	// echo "error: " . mysql_error();
	 header("Location: items.php?msg=4");
}
 ?>
