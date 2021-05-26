<?php
//connection
session_start();
$servername="localhost";
$user="root";
$password="";
$database="sportshop";
$connect=mysqli_connect($servername,$user,$password,$database);
$name=$_POST['registerName'];
$surname=$_POST['registerSurname'];
$email=$_POST['registerEmail'];
$password=$_POST['registerPassword'];
$phone=$_POST['registerPhone'];
$repeatPassword=$_POST['repeatPassword'];
$admin=0;
//Проверка пароля с повтором
if ($password==$repeatPassword){
    $sql="SELECT * FROM `user` WHERE `email`='.$email.'";
    $query=mysqli_query($connect,$sql);

    /*if (mysqli_num_rows($query)>0){
        $_SESSION['message']="This user is registered";
        header('Location: SportShop.php?id=01');
    }
    else {
*/
        $password = md5(md5(trim($password)));
        $sql = "INSERT INTO `user`(`address`,`name`,`surname`,`email`,`password`,`payment_card`,`admin`,`phone`,`basket_id`) VALUES (null,'$name','$surname','$email','$password',null,'$admin','$phone',null)";
        $result = mysqli_query($connect, $sql);
        if (isset($result)) {
            $_SESSION['result'] = "Registration completed successfully";
            header('Location: SportShop.php');
        } else {
            $_SESSION['message'] = "Whoops something went wrong";
            $_SESSION['index'] = "SportShop.php";
            header('Location: SportShop.php id=01');
            }
            }
//}
        else{
                $_SESSION['message'] = 'Password mismatch';
                $_SESSION['index'] = "SportShop.php";
                header('Location: SportShop.php?id=01');
            }
?>