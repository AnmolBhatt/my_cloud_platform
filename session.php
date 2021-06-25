<?php

include("connection.php");

session_start();

$user_check = $_SESSION['login_user'];
$query = "SELECT user_name FROM users WHERE user_name = '$user_check' ";
$ses_sql = mysqli_query($con,$query);

$row = mysqli_fetch_array($ses_sql);

$login_session = $row['user_name'];

if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    die();
}

?>