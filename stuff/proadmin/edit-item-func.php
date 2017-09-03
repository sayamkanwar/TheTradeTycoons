<?php
require_once('../includes/dbconnect.php');
if ($_GET['itemid']) {
	$itemid = $_GET['itemid'];
}
if (isset($_POST['submit'])) {
	$name = mysql_real_escape_string($_POST['name']);
	$tradepoints = mysql_real_escape_string($_POST['tradepoints']);
	$description = mysql_real_escape_string($_POST['description']);

$query = "UPDATE items SET name='{$name}',value='{$tradepoints}',description='{$description}' WHERE id='{$itemid}'";
$result = mysql_query($query);
if ($result) {
	header("Location: items.php?msg=1");
	//  echo "success";
}
else {
	// echo "error: " . mysql_error();
	 header("Location: items.php?msg=2");
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
