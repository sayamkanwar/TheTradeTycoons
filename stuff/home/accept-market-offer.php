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
  $arr = array($titem1, $titem2, $titem3, $titem4,$titem5);
  $arr2 = array();
  $N = 5;  $cnt=0;

  echo "Trade Items :<br>";
  for($i=0;$i<$N;$i++) {
      $arr2[$i]=0;
      echo "-->".$arr[$i]."<br>";
      if(empty($arr[$i])) $cnt++;
  }

  echo $titem1 . "<br>";
  echo $titem2 . "<br>";
  echo $titem3 . "<br>";
  echo $titem4 . "<br>";
  echo $titem5 . "<br>";

  $query2 = "SELECT * FROM items WHERE username='".$_SESSION['username']."'";
  $result2 = mysql_query($query2);
  echo "Item names :<br>";

  while ($row2 = mysql_fetch_assoc($result2)) {
    $itemname1 = $row2['name'];
    echo "--".$itemname1."<br>";
    for($i=0;$i<$N;$i++) {
      if($arr[$i]==$itemname1 && $arr2[$i]==0)  {
        $arr2[$i]=1;$cnt++;
        echo "checked : ".$arr[$i];
      }
    }
  }

  $query = "SELECT * FROM offers WHERE id='{$offerid}'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
    $mitem1 = $row['myitem1'];
    $mitem2 = $row['myitem2'];
    $mitem3 = $row['myitem3'];
    $mitem4 = $row['myitem4'];
    $mitem1 = $row['myitem1'];
    $myusername = $row['username'];
    $myarr = array($mitem1, $mitem2, $mitem3, $mitem4,$mitem5);
    $myarr2 = array();
    $F = 5;
    $crt=0;

    echo "My Items :<br>";
    for($i=0;$i<$F;$i++) {
        $myarr2[$i]=0;
        echo "-->".$myarr[$i]."<br>";
        if(empty($myarr[$i])) $crt++;
    }

    $query3 = "SELECT * FROM items WHERE username='{$myusername}'";
    $result3 = mysql_query($query3);

    while ($row3 = mysql_fetch_assoc($result3)) {
      $myitemname1 = $row3['name'];
      echo "--".$myitemname1."<br>";
      for($i=0;$i<$F;$i++) {
        if($myarr[$i]==$myitemname1 && $myarr2[$i]==0)  {
          $myarr2[$i]=1;$crt++;
          echo "checked : ".$myarr[$i];
        }
      }
    }

  if ($crt==$F) {
    //offer creator still has those items
    if($cnt==$N)  {
      //user has all the 5 items
      // echo "user is elidgible";
          $query3 = "UPDATE offers SET status='2',tradeusername='".$_SESSION['username']."' WHERE id='{$offerid}'";
          $result3 = mysql_query($query3);
          if ($result3) {
            // header("location: market.php?result=1");
            // echo "success";
          }
          else {
            echo "Error accepting market offer: " . mysql_error();
          }


          $query4 = "SELECT * FROM offers WHERE id='{$offerid}'";
          $result4 = mysql_query($query4);
          while ($row = mysql_fetch_assoc($result4)) {
          $byusername = $_SESSION['username'];
          $forusername = $row['username'];
          }
          $msg = "Your market offer has been accepted by Team {$byusername}.";
          $query5 = "INSERT INTO generalnotif (forusername,message) VALUES ('$forusername','$msg')";
          if (mysql_query($query5)) {
            // echo "ho gya";
          }
          else {
            echo "error creating decline notif! " . mysql_error();
          }

          header("location: auto-admin.php?offerid={$offerid}");


    }
    else  {
      // echo "user is not elidgible";
      header("location: market.php?result=0");
      //user doesnt have all the 5 items
    }

  }
  else {
    //offer creator now does not have those items
    $query = "UPDATE offers SET status='5' WHERE id='{$offerid}'";
    $result = mysql_query($query);
    if ($result) {
      // header("location: dash.php?result=6");
      // echo "success";
      echo "Auto Admin Offer Scrape Off Working";

    }
    else {
      echo "Auto Admin Offer Scrape Off Not Working, error: " . mysql_error();
    }
    header("location: market.php?result=5");


  }



}

  //Yaha se



// Yaha tak

     // echo $itemname1;
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



// print_r($query);

?>
