<?php
session_start();
include "db.php";

if (isset($_POST["_login"])) {

	$email = $_POST["email"];
	$pass  = md5($_POST["pass"]);

	$query = mysqli_query($mysqli,"select `id`, `name`, `email`, `photo`, `status` from users where email='$email' and password='$pass'");

	if(mysqli_num_rows($query)==1)
	{
		$row = mysqli_fetch_object($query);
		$_SESSION["userInfo"][] = $row;
        $status = mysqli_query($mysqli,"update users set status=1 where id='$row->id'");
		$_SESSION["isLoggedIn"] = true;
		 
		header("location:home.php");
	}else
		header("location:index.php?msg=0");
	
}//end 

else if (isset($_POST["_register"])) {

	$email = $_POST["email"];
	$name  = $_POST["name"];
	$pass  = md5($_POST["pass"]);

	$query = mysqli_query($mysqli,"select id from users where email='$email'");
	
	if(mysqli_num_rows($query)==0)
	{

		$photo = $_FILES["photo"]["name"];
		
		$extension   = explode(".",$photo);
		$filename = rand()."-ar.".$extension[1];

		move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/".$filename);

		$query = mysqli_query($mysqli,"insert into users set name='$name', email='$email', password='$pass', status=0,photo='$filename'");
		
		if($query)
		{
			header("location:register.php?msg=1");
		}	
	}else
		header("location:register.php?msg=2&email=".$email);

}//end 

