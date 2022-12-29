<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col col-md-3"></div>
			<div class="col col-md-6">
				<h1 class="text-center">Register</h1>
				
				<!-- Start form -->
				<form action="auth.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter Name">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" name="email" placeholder="Enter email">
					</div>
					<div class="form-group">
					   <label for="exampleInputPassword1">Password</label>
					   <input type="password" class="form-control" name="pass" placeholder="Password">
					</div>
					<div class="form-group">
					   <label for="exampleInputPassword1">Choose Profile</label>
					   <input type="file" class="form-control" name="photo" >
					</div>
					<div class="form-group form-check"></div>
					<button type="submit" name='_register' class="btn btn-primary">Register</button>
					<a href="index.php">Login</a>
				</form>
				<!-- END FORM -->
				<div>
					<?php

					if(isset($_GET["msg"]))
					{
						if($_GET["msg"]==1)
						{
							echo "<p class='alert alert-success'>Your account has been successfully created</p>";
						}
						else if($_GET["msg"]==2)
						{
							$email = $_GET["email"];
							echo "<p class='alert alert-warning'><u>$email</u> email already Exists</p>";
						}
					}
					?>

				</div>
			</div>
		</div>
	</div>
</body>
</html>