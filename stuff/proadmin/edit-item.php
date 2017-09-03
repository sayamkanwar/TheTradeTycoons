<?php
require_once('../includes/dbconnect.php');
if (isset($_GET['itemid'])) {
	$itemid = $_GET['itemid'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>THE BARTER</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="../main.js"></script>
	<style media="screen">
		body {
			width: 100%;
		}
		nav {
			position: fixed;
			top: 0;
		}

		.main-heading {
			margin-top: 20px;
		}
	</style>
</head>
<body>
<center>
	<?php
	$query = "SELECT * FROM items WHERE id={$itemid}";
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$name = $row['name'];
		$description = $row['description'];
	  $tradepoints = $row['value'];
	}
	 ?>
	<nav>
		<a href="logout.php" id="l4">LOGOUT</a>
		<a href="approvals.php">APPROVALS</a>
		<a href="players.php">PLAYERS</a>
		<a href="items.php">ITEMS</a>
		<a href="admin.php">HOME</a>
	</nav>
<div style="padding-top:100px;"></div>
<h1 class="main-heading">Edit Item</h1>
<div style="padding-top:40px;"></div>
<form method="POST" action="edit-item-func.php?itemid=<?php echo $itemid; ?>">
<input type="text" name="name" class="input" placeholder="Name" value="<?php echo $name; ?>" required><br>
	<input type="text" name="tradepoints" class="input" placeholder="Trade Points" value="<?php echo $tradepoints; ?>" required><br>
    <input type="description" name="description" class="input" placeholder="Description" value="<?php echo $description; ?>" required><br>
    <input type="submit" name="submit" class="input-submit"><br>
</form>
<?php if (isset($_GET['msg'])) {
  echo "<br><br>";
  $msg = $_GET['msg'];
  if ($msg == 1) {
  	$successmessage = "Successfully Updated!";
  echo "<p class=\"message2\">{$successmessage}</p>";
  }
  elseif ($msg == 2) {
  	$errormessage = "Error!";
    echo "<p class=\"message\">{$errormessage}</p>";
  }


}
?>
</center>
</body>
</html>
