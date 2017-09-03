<?php require_once('../includes/dbconnect.php'); ?>
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
	<nav>
		<a href="logout.php" id="l4">LOGOUT</a>
		<a href="rounds.php">ROUNDS</a>
		<a href="items.php">ITEMS</a>
		<a href="admin.php">HOME</a>
	</nav>
<div style="padding-top:100px;"></div>
<h1 class="main-heading">Register</h1>
<div style="padding-top:40px;"></div>
<form method="POST" action="register_function.php">
<input type="text" name="name" class="input" placeholder="Name" required><br>
	<input type="text" name="username" class="input" placeholder="Username" required><br>
    <input type="password" name="password" class="input" placeholder="Password" required><br>
    <input type="submit" name="submit" class="input-submit"><br>
</form>
<?php if (isset($_GET['msg'])) {
  echo "<br><br>";
  $msg = $_GET['msg'];
  if ($msg == 1) {
  	$successmessage = "Successfully Registered!";
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
