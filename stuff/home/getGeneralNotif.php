<?php
require_once('../includes/dbconnect.php');
 session_start();
$parentarr = array();
$approvalnotif = array();
$query = "SELECT * FROM generalnotif WHERE forusername='".$_SESSION['username']."' ORDER BY time desc";
$result = mysql_query($query);
$i=0;
while ($row = mysql_fetch_assoc($result)) {
$id = $row['id'];
$forusername = $row['forusername'];
$message = $row['message'];
$approvalnotif['id']=$id;
$approvalnotif['forusername']=$forusername;
$approvalnotif['message']=$message;
$applength = count($approvalnotif);
$parentarr[$i]=$approvalnotif;
$i++;
}

echo json_encode($parentarr);

// $query = "SELECT * FROM generalnotif WHERE forusername='".$_SESSION['username']."' ORDER BY time desc";
// $result = mysql_query($query);
// while ($row = mysql_fetch_assoc($result)) {
//
// }
// print_r($result);

 ?>
