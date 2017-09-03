<?php
require_once('../includes/dbconnect.php');
if (isset($_POST['submit'])) {
	$name = mysql_real_escape_string($_POST['name']);
	$tradepoints = mysql_real_escape_string($_POST['tradepoints']);
	$image = basename($_FILES['itemimage']['name']);
	$description = mysql_real_escape_string($_POST['description']);
	$status = "1";
	$username = mysql_real_escape_string($_POST['team']);

	$uploaddir = '../home/images/';
$uploadfile = $uploaddir . basename($_FILES['itemimage']['name']);

echo '<pre>';

if (move_uploaded_file($_FILES['itemimage']['tmp_name'], $uploadfile)) {
    //  echo "File is valid, and was successfully uploaded.\n";
} else {
    //  echo "Nahi hui upload!\n";
}

print "</pre>";

$query = "INSERT INTO items(name,value,image,description,status,username) VALUES('$name','$tradepoints','$image','$description','$status','$username')";
$result = mysql_query($query);
if ($result) {
	header("Location: add-item.php?msg=1");
	// echo "success";
}
else {
	// echo "error: " . mysql_error();
	header("Location: add-item.php?msg=2");
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
