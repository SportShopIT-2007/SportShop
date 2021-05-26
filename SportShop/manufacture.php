<?php
session_start();
require_once "connect/connect.php";
$connect=connection();
$brand=$_POST['brand'];
$description=$_POST['des'];
$logo=addslashes(file_get_contents($_FILES['logo']['tmp_name']));
$sql="INSERT INTO manafacturer (name,description,logo) VALUES ('$brand','$description','$logo')";
$result=mysqli_query($connect,$sql);
header('Location: dashboard.php');
?>
