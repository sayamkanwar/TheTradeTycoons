<?php 
require_once('../includes/dbconnect.php');
if (isset($_POST['submit'])) {
	$uid = rand(10000000, 100000000);
	$name = mysql_real_escape_string($_POST['name']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
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

$query = "INSERT INTO players(uid,name,username,password,usertype,ip) VALUES('$uid','$name','$username','$password','1','$ip')";
$result = mysql_query($query);
if ($result) {
	header("Location: register.php?msg=1");
}
else {
	header("Location: register.php?msg=2");
}

 // if(mysql_query("INSERT INTO players(uid,name,email,username,password,status,usertype,ip) VALUES('$uid','$name','$email','$username','$password',1,1,'$ip')"))
 // {
 //  header("Location: index.php");
 // }
 // else
 // {
   
 //  echo "Error: " . mysql_error();
    
 // }
}
else {
echo "Error";
 }
 ?>
