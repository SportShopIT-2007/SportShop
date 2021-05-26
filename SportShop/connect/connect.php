<?php
function connection()
{
    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "sportshop";

    return $connect = mysqli_connect($servername, $user, $password, $database);
}
?>