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
      <br><br>
    <h1 class="main-heading">Admin Panel</h1>
    <br><br>
    <a class="admin-button" href="register.php">Register Team</a>
    <a class="admin-button" href="add-item.php">Add Item</a>
  </center>
  </body>
</html>
