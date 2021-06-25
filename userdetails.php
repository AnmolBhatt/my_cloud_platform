<?php
include("connection.php");

// session_start();

$username = $_SESSION['login_user'];

$sql = "SELECT * FROM users WHERE user_name = '$user_check' ";

$user_sql = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($user_sql))
{
    $login_name = $row['user_name'];
    $login_password = $row['user_password'];
    $login_email = $row['user_email'];
    $login_propic = $row['user_profile'];
    $login_cv = $row['CV'];
    


}



if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    die();
}



?>