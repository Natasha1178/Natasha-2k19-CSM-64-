<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col col-md-3"></div>
			<div class="col col-md-6">
				<h1 class="text-center">Login</h1>
				<form action="auth.php" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" name="email" placeholder="Enter email">
					    
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" name="pass" placeholder="Password">
					  </div>
					  <div class="form-group form-check">

					  </div>
					  <button type="submit" name='_login' class="btn btn-primary">Login</button>
					  <a href="register.php">Sign up</a>
				</form>
				<div>
					<?php

					if(isset($_GET["msg"]))
					{
						if($_GET["msg"]==0)
						{
							echo "<p class='alert alert-danger'>Email or password is incorrect</p>";
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>