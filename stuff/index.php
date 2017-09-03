<?php require_once('includes/dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>THE BARTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
	<script type="text/javascript" src="main.js"></script>
	<style type="text/css">
	 body {
		 width: 100%;
	 }
	</style>
</head>
<body>
<center>
<div style="padding-top:100px;"></div>
<h1 class="main-heading">Login</h1>
<div style="padding-top:40px;"></div>
<form method="POST" action="includes/login.php">
	<input type="text" name="username" class="input" placeholder="Username" required><br>
    <input type="password" name="password" class="input" placeholder="Password" required><br>
    <input type="submit" name="submit" class="input-submit"><br>
</form>
<?php if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  if ($msg == 1) {
  	$message = "Invalid Username or Password!";
  }
  elseif ($msg == 2) {
  	$message = "No Team Selected!";
  }
echo "<br><br>";
echo "<p class=\"message\">{$message}</p>";
}
?>
</center>
</body>
</html>
