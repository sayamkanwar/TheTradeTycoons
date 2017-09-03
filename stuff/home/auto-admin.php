<?php
require_once('../includes/dbconnect.php');
session_start();

if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}

$query = "SELECT * FROM offers WHERE id='{$offerid}'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {

  $museritem1 = $row['myitem1'];
  $museritem2 = $row['myitem2'];
  $museritem3 = $row['myitem3'];
  $museritem4 = $row['myitem4'];
  $museritem5 = $row['myitem5'];
  $tuseritem1 = $row['tradeitem1'];
  $tuseritem2 = $row['tradeitem2'];
  $tuseritem3 = $row['tradeitem3'];
  $tuseritem4 = $row['tradeitem4'];
  $tuseritem5 = $row['tradeitem5'];





$musername = $row['username'];
$tusername = $row['tradeusername'];
// echo $musername;
// echo $tusername;


}

$ctr = 0;
$query2 = "SELECT * FROM tradelogs WHERE username1='{$musername}' AND username2='{$tusername}' OR username1='{$tusername}' AND username2='{$musername}'";
$result2 = mysql_query($query2);
while ($row = mysql_fetch_assoc($result2)) {
$ctr++;
}

echo "Items 1: " . $items1 . "<br>";
echo "Items 2: " . $items2 . "<br>";
echo "Ctr: " . $ctr . "<br>";
echo "Cnt: " . $cnt;
echo "Cntr: " . $cntr;

// $flag = "TRUE";
// if($cnt==5||$cntr==5){
//   $flag="FALSE";
// }

if ($ctr > 3) {
  echo "lol";
   header("location: admin-decline-offer.php?offerid={$offerid}");
}
elseif ($ctr <= 3) {
  echo "<br>lul";
   header("location: admin-approve-offer.php?offerid={$offerid}");
}
// print_r($query2);


 ?>
