<?php require_once('../includes/dbconnect.php'); ?>
<?php
session_start();
 if (!isset($_SESSION['username'])) {
  header("Location: ../index.php?msg=2");
 }
 else {
  echo "";
 }

 $query = "SELECT * FROM roundstatus";
 $result = mysql_query($query);
 while ($row = mysql_fetch_assoc($result)) {
  $roundstatus = $row['status'];
  if ($roundstatus == 0) {
    header("location: round-end.php");
  }
  }

$itemno = 1;

$query = "SELECT * FROM tradelogs WHERE username1='".$_SESSION['username']."' OR username2='".$_SESSION['username']."'";
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
	$id = $row['id'];
	$username1 = $row['username1'];
	$username2 = $row['username2'];
	$user1items = $row['user1items'];
	$user2items = $row['user2items'];

	echo "<tr>
  		<td>{$itemno}</td>
  		<td>{$username1}</td>
  		<td>{$username2}</td>
  		<td>{$user2items}</td>
  		<td>{$user1items}</td>
		</tr>";
	$itemno++;
}

?>