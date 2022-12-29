<?php
include"db.php";
session_start();
$info = $_SESSION['userInfo'][0];

$status = mysqli_query($mysqli,"update users set status=0 where email='$info->email'");

session_destroy();
header("location:index.php");