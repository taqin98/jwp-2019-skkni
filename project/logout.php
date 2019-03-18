<?php 
session_start();
//menghancurkan $_SESSION["admin"]
//session_destroy();
unset($_SESSION["admin"]);
echo "<script>alert('Anda telah Logout');</script>";
echo "<script>location='login.php';</script>";
?>