<?php require_once('../includes/dbconnect.php'); ?>
<?php
session_start();
 if (!isset($_SESSION['username'])) {
  header("Location: ../index.php?msg=2");
 }
 else {
  echo "";
 }

 $query = "SELECT * FROM players WHERE usertype=1 ORDER BY date asc";
 $result = mysql_query($query);
 while ($row = mysql_fetch_assoc($result)) {
  $player = $row['username'];
 }

 $query = "SELECT * FROM roundstatus";
 $result = mysql_query($query);
 while ($row = mysql_fetch_assoc($result)) {
  $roundstatus = $row['status'];
  if ($roundstatus == 0) {
    header("location: round-end.php");
  }
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>THE BARTER</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../main.js"></script>
</head>
<body>
<center>
<nav>
  <a href="logout.php" id="l4">LOGOUT</a>
  <a href="credits.php" id="l3">CREDITS</a>
  <a href="market.php" id="l2">MARKET</a>
  <a href="dash.php" id="l1">INVENTORY</a>
  <a href="../finalgrid.pdf" target="_blank" id="l1">GRID</a>
  <a href="../finalrules.pdf" target="_blank" id="l1">RULES</a>
</nav>
<br><br><br><br><br><br>
<?php if (isset($_GET['result'])) {
  $res = $_GET['result'];
  if ($res == 1) {
    echo "<p class=\"success-msg\">Sent for admin approval!</p>";
  }
  if ($res == 0) {
    echo "<p class=\"message\">You are not eligible for the trade!</p>";
  }
  if ($res == 2) {
    echo "<p class=\"message\">Invalid Offer</p>";
  }
  if ($res == 3) {
    echo "<p class=\"success-msg\">Offer Created Successfully!</p>";
  }
  if ($res == 4) {
    echo "<p class=\"message\">Items not selected!</p>";
  }
  if ($res == 5) {
    echo "<p class=\"message\">Offer creator does not have the items!</p>";
  }
} ?>

<h1 class="main-heading">Market</h1>
<div style="padding-top:40px;"></div>
<br>
<button class="create-offer">Create Offer</button>
<br><br><br><br>
<table class="market" cellspacing="0" cellpadding="30">
<?php



$query = "SELECT * FROM players WHERE usertype=1 ORDER BY name asc";
$result = mysql_query($query);
// print_r($result);
while ($row = mysql_fetch_assoc($result)) {
 $player = strtoupper($row['username']);
// echo "<div class=\"long-box\">
//  <div class=\"team-name\">
//    <br>
//  <h2>Team {$player}</h2>
//  </div>
//  <div class=\"team-items\">
//  <div class=\"item-image\">
//  <div class=\"items-overlay\"><br><p>200</p></div>
//  </div></div></div><br><br>";
echo "<tr style=\"padding: 50px; margin:0;\">
    <th style=\"font-size:20px; font-weight:400; border-bottom:1px solid #222;\">Team {$player}</th>";
    $query2 = "SELECT * FROM items WHERE username='{$player}'";
    $result2 = mysql_query($query2);
    while ($row2 = mysql_fetch_assoc($result2)) {
     $iimage = $row2['image'];
     $iname = $row2['name'];
     $ivalue = $row2['value'];
  echo "<td style=\"border-bottom:1px solid #222;\"><div class=\"item-image\" style=\"background:url('images/{$iimage}') no-repeat; background-size:cover;\"><div class=\"items-overlay\"><br><p>{$ivalue}</p></div></div><p>{$iname}</p></td>";
    }
echo "</tr>";
}



 ?>

</table>

<!-- <div class="long-box">
<div class="team-name">
  <br>
<h2>Team A</h2>
</div>
<div class="team-items">
  <div class="item-image">
    <div class="items-overlay"><br><p>500</p></div>
  </div>
  <div class="item-image">
    <div class="items-overlay"><br><p>500</p></div>
  </div>
  <div class="item-image">
    <div class="items-overlay"><br><p>500</p></div>
  </div>
  <div class="item-image">
    <div class="items-overlay"><br><p>500</p></div>
  </div>
  <div class="item-image">
    <div class="items-overlay"><br><p>500</p></div>
  </div>
</div> -->
<div class="clear"></div>
</div>
<div class="overlay2"></div>
<div class="offer-box">
<div class="close-button"><img src="close.png"></div>
<h2>Create Offer</h2>
<p>
  Select Team
</p>
<div class="box-width">
<form action="create-offer.php" method="post">
<select name="team" id="players" onchange="updateItems()">
<option value="default">-- Select a Team --</option>

<?php
  $query = "SELECT * FROM players WHERE usertype=1 ORDER BY date asc";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
   $player = $row['username'];
   if ($player !== $_SESSION['username']) {
     echo "<option value=\"{$player}\">{$player}</option>";

    //  if($t==strtoupper($player))  {
    //    echo "<option value=\"{$player}\" selected>{$player}</option>";
     //
    //  }
    //  else {
     //
    //  }
   }

  }

   ?>
<option value="market">Market</option>
</select>


<br><br>

<?php
if (isset($_GET['ob'])) {
  $ob = $_GET['ob'];
  if ($ob == 1) {
    echo "<body onload='openOfferBox();'>";
  }
}
if (isset($_GET['t'])) {
  $_SESSION['tradeusername'] = $_GET['t'];
  $no = 1;
  echo "<body onload='openOfferBox()'>";
  $t = strtoupper($_GET['t']);
  if ($t == "MARKET") {
   echo $t . "<br><br>";
   $query = "SELECT * FROM items WHERE username!='".$_SESSION['username']."'";
     $result = mysql_query($query);
     while ($row = mysql_fetch_assoc($result)) {
      $itemname = $row['name'];
        echo "<input type='checkbox' name='tradeitems[]' value='{$itemname}'> <label>$itemname</label>";
        $no++;

     }
  }
  else {
    echo "Team " . $t . "<br><br>";
    $query = "SELECT * FROM items WHERE username='{$t}'";
      $result = mysql_query($query);
      while ($row = mysql_fetch_assoc($result)) {
       $itemname = $row['name'];
         echo "<input type='checkbox' name='tradeitems[]' value='{$itemname}'> <label>$itemname</label><br>";
         $no++;

      }
  }

}
 ?>


<p>My Items</p>

  <?php
  $myno = 1;
  $query = "SELECT * FROM items WHERE username='".$_SESSION['username']."'";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result)) {
   $name = $row['name'];
   echo "<input type=\"checkbox\" name=\"myitems[]\" value=\"{$name}\"> <label>{$name}</label>";
   $myno++;
  }
?>
<br><br>
<input type="submit" name="submit">
</form>
</div>
</div>
<div class="open-offers">
  <br><br>
  <h1 class="sub-heading">Open Offers</h1>
  <table border="1" cellpadding="10" cellspacing="0">
<tr>
  <th>S. No.</th>
  <th>Offer Created By</th>
  <th>Items Wanting to Give</th>
  <th>Items Looking For</th>
  <th>Status</th>
</tr>
<?php
$itemno = 1;
$query = "SELECT * FROM offers WHERE tradeusername='market' AND status='1' OR status='4' ORDER BY time desc";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
  $offerid = $row['id'];
  $offerby = $row['username'];
  $myitem1 = $row['myitem1'];
  $myitem2 = ", " . $row['myitem2'];
  $myitem3 = ", " . $row['myitem3'];
  $myitem4 = ", " . $row['myitem4'];
  $myitem5 = ", " . $row['myitem5'];
  if (empty($row['myitem1'])) {
    $myitem1 = "";
  }
  if (empty($row['myitem2'])) {
    $myitem2 = "";
  }
  if (empty($row['myitem3'])) {
    $myitem3 = "";
  }
  if (empty($row['myitem4'])) {
    $myitem4 = "";
  }
  if (empty($row['myitem5'])) {
    $myitem5 = "";
  }

  $tradeitem1 = $row['tradeitem1'];
  $tradeitem2 = ", " . $row['tradeitem2'];
  $tradeitem3 = ", " . $row['tradeitem3'];
  $tradeitem4 = ", " . $row['tradeitem4'];
  $tradeitem5 = ", " . $row['tradeitem5'];
  if (empty($row['tradeitem1'])) {
    $tradeitem1 = "";
  }
  if (empty($row['tradeitem2'])) {
    $tradeitem2 = "";
  }
  if (empty($row['tradeitem3'])) {
    $tradeitem3 = "";
  }
  if (empty($row['tradeitem4'])) {
    $tradeitem4 = "";
  }
  if (empty($row['tradeitem5'])) {
    $tradeitem5 = "";
  }

  echo "<tr>
    <td>{$itemno}</td>
    <td>{$offerby}</td>
    <td>{$myitem1}{$myitem2}{$myitem3}{$myitem4}{$myitem5}</td>
    <td>{$tradeitem1}{$tradeitem2}{$tradeitem3}{$tradeitem4}{$tradeitem5}</td>
    <td><a href=\"accept-market-offer.php?offerid={$offerid}\" class=\"accept-link\">Accept</a></td>
  </tr>";
 $itemno++;
}
?>

  </table>
</div>
<!-- <iframe src="notif.php"></iframe> -->
<div class="notif-panel" id="notif-panel">
 <!-- <div class="notif">
   <a href="#">
  <div class="close-notif">
    <br>
  <img src="close.png">
  </div>
  </a>
  <p>Your trade has been approved by the broker.</p>
</div> -->
<br><br><br><br>
</div>
</center>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
// window.__lc = window.__lc || {};
// window.__lc.license = 8485982;
// (function() {
//   var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
//   lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
//   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
// })();
</script>
<!-- End of LiveChat code -->
<input type='hidden' id='sessionvar' value="<?php echo $_SESSION['username']; ?>">
</body>
</html>
