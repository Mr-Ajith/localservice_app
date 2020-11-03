<?php
session_start();
$city=$_GET['city'];
$_SESSION['city']=$city;
header("location:index.php");
 ?>
