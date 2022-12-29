<?php
session_start();
$userInfo = $_SESSION["userInfo"][0];
$userInfo->status = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome in HOME</title>
	<?php include "header.php";?>
</head>
<body>
	<div class="container">
	<?php include "navbar.php"; ?>	
		    <div class="row">
				<div class="col col-md-3">
				    <?php
				    include "sidebar.php";
					?>
				</div>	
				<?php
                if(isset($_GET["msg"])){
    				if($_GET["msg"]=="profile"){
			            include "db.php";
			    	    $query = mysqli_query($mysqli,"select name,email,password,photo,status from users where id='$userInfo->id'");
			            $row   = mysqli_fetch_object($query);
				?>
				<div class="col col-md-6">
					<h1 class="text-center">Profile</h1>
			        <img src="uploads/<?=$row->photo?>" style="margin-left:223px;width:100px;height: 100px">
			        <!-- Start form -->
					<form action="modify.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?=$row->name?>">
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?=$row->email?>" readonly>
						</div>
						<div class="form-group">
						   <label for="exampleInputPassword1">Password</label>
						   <input type="password" class="form-control" name="pass" placeholder="Password" value="<?=$row->password?>">
						</div>
						<div class="form-group">
						   <label for="exampleInputPassword1">Choose Profile</label>
						   <input type="file" class="form-control" name="photo" value="<?=$row->photo?>">
						</div>
						<div class="form-group form-check"></div>
						<button type="submit" name='update' class="btn btn-primary">Update</button>
						<a href="home.php">Cancel</a>
					</form>
					<!-- END FORM -->	
<?php
        }
    }
        if(isset($_GET["msg"])){
			if($_GET["msg"]=="updated"){
	        	echo "<h1 style='font-weight:bold;margin:-311px 0 0 430px'>successfully Updated</h1>";
	        }
	    }    
?>
				<div>
			</div>		
    </div>
</body>
</html>