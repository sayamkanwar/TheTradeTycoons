<?php
require_once('../includes/dbconnect.php');
session_start();
if (!isset($_SESSION['username'])) {
 header("Location: ../index.php?msg=2");
}
else {
 header("location: admin.php");
}
 ?>
