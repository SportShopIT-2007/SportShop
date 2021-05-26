<?php
session_start();
require_once "connect/connect.php";
$connect=connection();
$product=$_GET['id'];
mysqli_query($connect,"DELETE FROM `product` WHERE `product`.`product_id` = $product");
header("Location:dashboard.php");
?>