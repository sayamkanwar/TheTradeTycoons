<?php
require_once('../includes/dbconnect.php');
session_start();
if (isset($_GET['offerid'])) {
  $offerid = $_GET['offerid'];
}

$query = "SELECT * FROM offers WHERE id='{$offerid}'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
  $titem1 = $row['tradeitem1'];
  $titem2 = $row['tradeitem2'];
  $titem3 = $row['tradeitem3'];
  $titem4 = $row['tradeitem4'];
  $titem5 = $row['tradeitem5'];
  echo $titem1 . "<br>";
  echo $titem2 . "<br>";
  echo $titem3 . "<br>";
  echo $titem4 . "<br>";
  echo $titem5 . "<br>";

  $query2 = "SELECT * FROM items WHERE username='".$_SESSION['username']."'";
  $result2 = mysql_query($query2);
  while ($row2 = mysql_fetch_assoc($result2)) {
    $itemname1 = $row2['name'];
     echo $itemname1;
  //   if ($titem1 !== $itemname) {
  //     // header("location: market.php?result=0");
  //     echo "does not match (1)";
  //   }
  //   elseif ($titem2 !== $itemname) {
  //     // header("location: market.php?result=0");
  //     echo "does not match (2)";
  //
  //   }
  //   elseif ($titem3 !== $itemname) {
  //     // header("location: market.php?result=0");
  //     echo "does not match (3)";
  //
  //   }
  //   elseif ($titem4 !== $itemname) {
  //     // header("location: market.php?result=0");
  //     echo "does not match (4)";
  //
  //   }
  //   elseif ($titem5 !== $itemname) {
  //     // header("location: market.php?result=0");
  //     echo "does not match (5)";
  //   }
   }
  //
  //   else {
  //     // $query3 = "UPDATE offers SET status='2',tradeusername='".$_SESSION['username']."' WHERE id='{$offerid}'";
  //     // $result3 = mysql_query($query3);
  //     // if ($result3) {
  //     //   header("location: market.php?result=1");
  //     //   // echo "success";
  //     // }
  //     // else {
  //     //   echo "error: " . mysql_error();
  //     // }
  //
  //     echo "shivam nagpal is pr0 but sayam is supro";
  //   }
// }
}

print_r($query);


 ?>
