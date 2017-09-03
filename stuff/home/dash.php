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
  elseif ($res == 3) {
      echo "<p class=\"success-msg\">Successfully declined!</p>";
    }
    elseif ($res == 5) {
        echo "<p class=\"success-msg\">Offer Approved by the admin!</p>";
      }
      elseif ($res == 6) {
          echo "<p class=\"message\">Offer Declined by the admin!</p>";
        }
} ?>
<h1 class="main-heading">Inventory</h1>
<?php
$query = "SELECT * FROM players WHERE username='".$_SESSION['username']."'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
 $tradecounter = $row['tradecounter'];
 echo "<p class='userinfo'>Trade Counter: {$tradecounter}<p>";
 }

 $query = "SELECT SUM(value) as totaltradepoints FROM items WHERE username='".$_SESSION['username']."'";
 $result = mysql_query($query);
 while ($row = mysql_fetch_assoc($result)) {
  $totaltradepoints = $row['totaltradepoints'];
  echo "<p class='userinfo'>Total Trade Points: {$totaltradepoints}<p>";
  }
 ?>
 <br><br><br><br>
<?php
$query = "SELECT * FROM items WHERE username='".$_SESSION['username']."' ORDER BY time desc";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
 $id = $row['id'];
 $name = $row['name'];
 $value = $row['value'];
 $image = $row['image'];
 $description = $row['description'];

 echo "<div class='card'>
   <div class='card-main' style=\"background: url('images/{$image}') no-repeat; background-size:cover;\">
   <div class='card-overlay'>
    <a href='market.php?ob=1'>
    <div class='trade'>
      <img src='trade-icon.png'>
    </div>
    </a>
   </div>

 </div>
 <div class='card-hidden'>
 <br>
 <p class='card-title'>{$name}</p>
 <p class='card-value'>Trade Points: {$value}</p>
 </div>
 </div>";
}
 ?>
 <h2 class="sub-heading">Offers For Me</h2>
 <table border="1" cellpadding="10" cellspacing="0">
<tr>
 <th>S. No.</th>
 <th>Offer Created By</th>
 <th>Items Wanting to Give</th>
 <th>Items Looking For</th>
 <th>Accept</th>
 <th>Decline</th>
</tr>
<?php
$itemno = 1;
$query = "SELECT * FROM offers WHERE status='1' AND tradeusername='".$_SESSION['username']."'";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$id = $row['id'];
$status = $row['status'];
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
   <td><a href=\"accept-offer.php?offerid={$id}\" class=\"accept-link\">Accept</a></td>
   <td><a href=\"decline-offer.php?offerid={$id}\" class=\"accept-link\">Decline</a></td>
 </tr>";
$itemno++;
}
?>
</table>
<br>
<h2 class="sub-heading">Trade Logs</h2>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>S. No.</th>
<th>Offer Created By</th>
<th>Offer Created For</th>
<th>Items You Gave</th>
<th>Items You Received</th>
</tr>
<?php
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
</table>
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
<br><br>
<br><br>
<br><br>
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
