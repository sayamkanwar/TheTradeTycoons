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
<h1 class="main-heading">Credits</h1>
<h2 class="credits-heading">CONCEPT AND IDEA BY</h2>
<h4 class="credits-subheading">Saiyam Jain</h4>
<h2 class="credits-heading">CREATED WITH <span><img src="heart.png" style="width:20px; height:20px;" alt="heart" /></span> BY</h2>
<h4 class="credits-subheading">Sayam Kanwar</h4>
<h2 class="credits-heading">SPECIAL THANKS TO</h2>
<h4 class="credits-subheading">Shivam Bansal and Palash Taneja</h4>
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
