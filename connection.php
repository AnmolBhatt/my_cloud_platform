<?php

$host = 'my-job-portal.c7txn7awdd0h.us-east-2.rds.amazonaws.com';
$user = 'root';
$pass = 'bhatt123';
$db = 'job_portal';

if(!$con = mysqli_connect($host, $user, $pass, $db))
{
    die("failed to connect!");
}


?>