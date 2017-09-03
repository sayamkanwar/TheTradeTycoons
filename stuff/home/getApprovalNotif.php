<?php
require_once('../includes/dbconnect.php');
session_start();
$parentarr = array();
$approvalnotif = array();
$query = "SELECT * FROM approvalnotif WHERE status='1' AND forusername1='".$_SESSION['username']."' OR forusername2='".$_SESSION['username']."' ORDER BY time desc";
$result = mysql_query($query);
$i=0;
while ($row = mysql_fetch_assoc($result)) {
$id = $row['id'];
$forusername1 = $row['forusername1'];
$forusername2 = $row['forusername2'];
$message1 = $row['message1'];
$message2 = $row['message2'];
$approvalnotif['id']=$id;
$approvalnotif['forusername1']=$forusername1;
$approvalnotif['forusername2']=$forusername2;
$approvalnotif['message1']=$message1;
$approvalnotif['message2']=$message2;
$applength = count($approvalnotif);
$parentarr[$i]=$approvalnotif;
$i++;
}

echo json_encode($parentarr);


 ?>
