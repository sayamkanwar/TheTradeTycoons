 <?php

	$username = "root";
	$password = "";
	$hostname = "localhost";
	$database = "main"; 

	ini_set('session.gc_maxlifetime', 3600*3);
	//Connect to DB.
	$dbhandle = mysql_connect($hostname, $username, $password)
  		or die("Unable to connect to MySQL");


  	$selected_db = mysql_select_db($database,$dbhandle)
 		 or die("Could not select examples");

if (isset($_POST['username']) and isset($_POST['password'])){
$username = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));

$query = "SELECT * FROM `players` WHERE username='$username' and password='$password'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
$name = $row['name'];

$count = mysql_num_rows($result);

if ($count == 1){
session_start();
$_SESSION['username'] = $username;
return 1;
}
else {
return 0;
}
}


?>
