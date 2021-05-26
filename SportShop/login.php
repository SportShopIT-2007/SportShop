<?php
session_start();
require "connect/connect.php";
connection();
$servername="localhost";
$user="root";
$password="";
$database="sportshop";
$connect=mysqli_connect($servername,$user,$password,$database);
$userLogin=$_POST['userEmail'];
$userPassword=$_POST['userPassword'];
$userPassword=md5(md5(trim($userPassword)));
$sql="SELECT * FROM `user` WHERE `email`='$userLogin' AND `password`='$userPassword'";
$check_user=mysqli_query($connect,$sql);
$rows=mysqli_num_rows($check_user);
if (($rows) >0){
$user=mysqli_fetch_assoc($check_user);

$_SESSION['user']=[
    "address"=>$user['address'],
    "id"=>$user['id'],
    "name"=>$user['name'],
    "surname"=>$user['surname'],
    "email"=>$user['email'],
    "payment_card"=>$user['payment_card'],
    "admin"=>$user['admin'],
    "phone"=>$user['phone'],
    "basket_id"=>$user['basket_id']
];

$_SESSION['user']=$user;
if ($_SESSION['user']['admin']==0) {


    $_SESSION['login'] = "You have successfully logged in";
    header('Location: account.php');
}
else{
    header('Location: dashboard.php');
}
}
else{
    $_SESSION['error']="Wrong password or e-mail";
    header('Location: SportShop.php');
}
?>

