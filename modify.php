<?php
include "db.php";
session_start();
$userInfo = $_SESSION["userInfo"][0];

if(isset($_POST["update"])) {
    $name  = $_POST["name"];
	$email = $_POST["email"];
	$pass  = md5($_POST["pass"]);

	$query = mysqli_query($mysqli,"update users set name='$name',password='$pass' where id='$userInfo->id'");

    if($query){
    	header("location:home.php?msg=updated");
    }
}		