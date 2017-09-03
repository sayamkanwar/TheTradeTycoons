<?php
require_once('../includes/dbconnect.php');
$query2 = "SELECT SUM(value) as totaltradepoints FROM items";
$result2 = mysql_query($query2);
while ($row = mysql_fetch_assoc($result2)) {
 $totaltradepoints = $row['totaltradepoints'];
 $query2 = "UPDATE items SET tradepoints='{$itemfinalval}' WHERE username='{$musername}'";
 $result2 = mysql_query($query2);
 }
 ?>
