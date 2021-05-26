<?php
session_start();
include "connect/connect.php";
$servername="localhost";
$user="root";
$password="";
$database="sportshop";
$connect=mysqli_connect($servername,$user,$password,$database);
$name=$_POST['name'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$category=$_POST['category'];
$description=$_POST['description'];
$brand=$_POST['option'];
$img=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql="INSERT INTO product (name,price,img,discount,description,category,manafacturer_id) VALUES ('$name','$price','$img','$discount','$description','$category',$brand)";
$result=mysqli_query($connect,$sql);
header("Location: dashboard.php");
?>