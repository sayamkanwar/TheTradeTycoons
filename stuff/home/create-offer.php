<?php
require_once('../includes/dbconnect.php');
session_start();
if (isset($_POST['submit'])) {
$myusername = $_SESSION['username'];
// $myitem1 = $_POST['myitem1'];
// $myitem2 = $_POST['myitem2'];
// $myitem3 = $_POST['myitem3'];
// $myitem4 = $_POST['myitem4'];
// $myitem5 = $_POST['myitem5'];
$tradeusername = $_SESSION['tradeusername'];
// $tradeitem1 = $_POST['tradeitem1'];
// $tradeitem2 = $_POST['tradeitem2'];
// $tradeitem3 = $_POST['tradeitem3'];
// $tradeitem4 = $_POST['tradeitem4'];
// $tradeitem5 = $_POST['tradeitem5'];

// echo "My Item1: " . $myitem1 . "<br>";
// echo "My Item2: " . $myitem2 . "<br>";
// echo "My Item3: " . $myitem3 . "<br>";
// echo "My Item4: " . $myitem4 . "<br>";
// echo "My Item5: " . $myitem5 . "<br>";
echo "<br>";
// echo "Trade Item1: " . $tradeitem1 . "<br>";
// echo "Trade Item2: " . $tradeitem2 . "<br>";
// echo "Trade Item3: " . $tradeitem3 . "<br>";
// echo "Trade Item4: " . $tradeitem4 . "<br>";
// echo "Trade Item5: " . $tradeitem5 . "<br>";



// for ($i=0; $i < 70; $i++) {
//   if (isset($_POST['tradeitem[i]'])) {
//     $tradeitems = array();
//     for ($j=0; $j<5 ; $j++) {
//       $tradeitems[j] = $_POST['tradeitem[i]'];
//       echo $tradeitems;
//     }
//   }
// }

$tradeitems = $_POST['tradeitems'];
$myitems = $_POST['myitems'];



echo "<br>";
echo "My items: "; print_r($myitems);
echo "<br>";
echo "Trade items: "; print_r($tradeitems);
$tradearrlength = count($tradeitems);
$myarrlength = count($myitems);
echo "<br>";

echo "<br>";
echo "Trade items length: " . $tradearrlength;

echo "<br>";
echo "My items length: " . $myarrlength;

echo "<br>";
$tradeitem1 = $tradeitems[0];
$tradeitem2 = $tradeitems[1];
$tradeitem3 = $tradeitems[2];
$tradeitem4 = $tradeitems[3];
$tradeitem5 = $tradeitems[4];
// echo $tradeitem5;
// print_r($titems);
//
$myitem1 = $myitems[0];
$myitem2 = $myitems[1];
$myitem3 = $myitems[2];
$myitem4 = $myitems[3];
$myitem5 = $myitems[4];

if ($tradeusername !== "market") {
  $msg = "Team {$myusername} has created an offer for you.";
  $query2 = "INSERT INTO generalnotif (forusername,message) VALUES ('$tradeusername','$msg')";
  if (mysql_query($query2)) {
    // echo "ho gya";
  }
  else {
    echo "error creating decline notif! " . mysql_error();
  }
}

$ok = 1;

if ($tradearrlength > 5 || $myarrlength > 5) {
  // echo "invalid offer";
  header("location: market.php?result=2");
}
else {
  if (isset($myitems) && isset($tradeitems)) {
    if (mysql_query("INSERT INTO offers (username, myitem1,myitem2,myitem3,myitem4,myitem5,tradeusername,tradeitem1,tradeitem2,tradeitem3,tradeitem4,tradeitem5) VALUES ('$myusername','$myitem1','$myitem2','$myitem3','$myitem4','$myitem5','$tradeusername','$tradeitem1','$tradeitem2','$tradeitem3','$tradeitem4','$tradeitem5')")) {
      // echo "Offer Created Successfully! :)";
    header("location: market.php?result=3");
    }
    else {
      echo "Error creating offer: " .mysql_error();
    }
  }
  else {
    header("location: market.php?result=4");
  }
  // echo "ready to create offer";


}

// echo $tradeusername;

// echo $myusername;
}
 ?>
