<?php
require_once('../includes/dbconnect.php');
$details = array();
$query = "SELECT * FROM notifications WHERE status='1'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$forusername1 = $row['forusername1'];
$forusername2 = $row['forusername2'];
$details['forusername1']=$forusername1;
$details['forusername2']=$forusername2;
}
echo json_encode($details);
 ?>
