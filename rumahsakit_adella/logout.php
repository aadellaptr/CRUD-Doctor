<?php
session_start();
unset($_SESSION["email"]);
$_SESSION["alert"] = "Anda berhasil Logout";
header("Location:login.php");
?>