<?php
if (empty($_SESSION["email"])){
    $_SESSION["alert"] = "Anda Harus Login Terlebih Dahulu";
    header ("Location:login.php");
}
?>