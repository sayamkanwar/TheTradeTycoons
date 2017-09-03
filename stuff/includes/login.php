<?php

require_once('dbconnect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));
$res = mysql_query("SELECT * FROM players WHERE username='$username'");
 while($row = mysql_fetch_assoc($res)) {
    $usertype = $row['usertype'];
 }

$ip = "";

if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}


$query = "SELECT * FROM `players` WHERE username='$username' and password='$password'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
$name = $row['name'];

$count = mysql_num_rows($result);

if ($count == 1){
session_start();
$_SESSION['username'] = $username;
header("location: ../home/dash.php");
}
else {
header("location: ../index.php?msg=1");
}

}
?>
