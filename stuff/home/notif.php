<?php
require_once('../includes/dbconnect.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="../style.css" media="screen" title="no title">
    <style media="screen">
      body {
        background: #fff;
      }

      .notif {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <center>
    <?php
    $query = "SELECT * FROM notifications WHERE status='1'";
    $result = mysql_query($query);
    while ($row = mysql_fetch_assoc($result)) {
      $id = $row['id'];
      echo " <div class=\"notif\">
         <br>
         <a href=\"clear-notif.php?notifid={$id}\">
         <div class=\"close-notif\">
           <img src=\"close.png\">
         </div>
         </a>
         <p class=\"notif-text\">Your trade has been approved by the broker.</p>
       </div>";
  }
     ?>
   </center>
  </body>
</html>
