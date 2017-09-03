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
      <br><br><br><br><br>
      <?php if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == 1) {
        	$successmessage = "Successfully Updated!";
        echo "<p class=\"message2\">{$successmessage}</p>";
        }
        elseif ($msg == 2) {
        	$errormessage = "Error!";
          echo "<p class=\"message\">{$errormessage}</p>";
        }

        elseif ($msg == 3) {
          $errormessage = "Error!";
          echo "<p class=\"message2\">Successfully Deleted!</p>";
        }

        elseif ($msg == 4) {
          $errormessage = "Error!";
          echo "<p class=\"message\">Error Deleting Item!</p>";
        }


      }
      ?>
    <h1 class="main-heading" style="margin-top:2px;">View Items</h1>
    <br><br>
<table border="1" cellspacing="0" cellpadding="20">
<tr>
  <th>S. No.</th>
  <th>Name</th>
  <th>Trade Points</th>
  <th>Description</th>
  <th>Username</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php
$count=1;
$query = "SELECT * FROM items ORDER BY username asc";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
$id = $row['id'];
$name = $row['name'];
$tradepoints = $row['value'];
$description = $row['description'];
$username = $row['username'];
echo "<tr>
      <td>{$count}</td>
      <td>{$name}</td>
      <td>{$tradepoints}</td>
      <td>{$description}</td>
      <td>{$username}</td>
      <td><a class=\"accept-link\" href=\"edit-item.php?itemid={$id}\">Edit</a></td>
      <td><a class=\"accept-link\" href=\"delete-item.php?itemid={$id}\" onclick=\"return confirm('Are you sure?')\">Delete</a></td>
      </tr>";
$count++;
}
 ?>
</table>
  </center>
  <br><br><br><br><br><br><br><br><br>
  </body>
</html>
