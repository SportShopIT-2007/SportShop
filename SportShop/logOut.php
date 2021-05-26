<?php
session_start();
unset($_SESSION['user']);
$_SESSION['login']='LogOut';
header("Location: SportShop.php");
?>