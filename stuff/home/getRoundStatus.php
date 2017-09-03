<?php
require_once('../includes/dbconnect.php');
session_start();
$parentarr = array();
$query = "SELECT * FROM roundstatus";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$id = $row['id'];
$status = $row['status'];
$parentarr['id']=$id;
$parentarr['status']=$status;
echo json_encode($parentarr);

}



 ?>
