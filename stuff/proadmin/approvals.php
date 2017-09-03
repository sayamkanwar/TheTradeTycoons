<?php require_once('../includes/dbconnect.php'); ?>
<?php
session_start();
 if (!isset($_SESSION['username'])) {
  header("Location: ../index.php?msg=2");
 }
 else {
  echo "";
 }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" href="../style.css" type="text/css">
    <style media="screen">
      body {
        width: 100%;
      }
      nav {
        position: fixed;
        top: 0;
      }

      .main-heading {
        margin-top: 120px;
      }
    </style>
  </head>
  <body>
    <center>
      <nav>
        <a href="logout.php" id="l4">LOGOUT</a>
        <a href="rounds.php">ROUNDS</a>
        <a href="items.php">ITEMS</a>
        <a href="admin.php">HOME</a>
      </nav>
      <br><br><br><br><br><br>
      <?php if (isset($_GET['result'])) {
        $res = $_GET['result'];
        if ($res == 1) {
          echo "<p class=\"success-msg\">Trade Successfully Approved!</p>";
        }
        elseif ($res == 3) {
          echo "<p class=\"success-msg\">Trade Declined!</p>";
        }
      } ?>
    <h1 class="main-heading" style="margin-top:20px;">Approvals</h1>
     <table border="1" cellpadding="10" cellspacing="0">
    <tr>
     <th>S. No.</th>
     <th>Offer Created By</th>
     <th>Items Wanting to Give</th>
     <th>Items Looking For</th>
     <th>Offer for</th>
     <th>Approve</th>
     <th>Decline</th>
    </tr>
    <?php
    $itemno = 1;
    $query = "SELECT * FROM offers WHERE status='2'";
    $result = mysql_query($query);
    while ($row = mysql_fetch_assoc($result)) {
    $id = $row['id'];
    $status = $row['status'];
    $tradeusername = $row['tradeusername'];
     $offerby = $row['username'];
     $myitem1 = $row['myitem1'];
     $myitem2 = ", " . $row['myitem2'];
     $myitem3 = ", " . $row['myitem3'];
     $myitem4 = ", " . $row['myitem4'];
     $myitem5 = ", " . $row['myitem5'];
     $mitem1 = $row['myitem1'];
     $mitem2 = $row['myitem2'];
     $mitem3 = $row['myitem3'];
     $mitem4 = $row['myitem4'];
     $mitem5 = $row['myitem5'];
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
     $titem1 = $row['tradeitem1'];
     $titem2 = $row['tradeitem2'];
     $titem3 = $row['tradeitem3'];
     $titem4 = $row['tradeitem4'];
     $titem5 = $row['tradeitem5'];
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
       <td>{$tradeusername}</td>
       <td><a href=\"approve-offer.php?offerid={$id}&mitem1={$mitem1}&mitem2={$mitem2}&mitem3={$mitem3}&mitem4={$mitem4}&mitem5={$mitem5}&titem1={$titem1}&titem2={$titem2}&titem3={$titem3}&titem4={$titem4}&titem5={$titem5}&musername={$offerby}&tusername={$tradeusername}\" class=\"accept-link\">Approve</a></td>
       <td><a href=\"decline-offer.php?offerid={$id}\" class=\"accept-link\">Decline</a></td>
     </tr>";
    $itemno++;
    }
    ?>
    </table>
    <br><br>
  </center>
  </body>
</html>
