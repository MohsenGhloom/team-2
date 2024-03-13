<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$id ="";
	
	$name = "";
    $email = "";
	$password = "";
	$mobile = "";
	$mobile = "";
	$address = "";
	

	$query = "select * from users where id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$id = $row['id'];
		$name = $row['name'];
        $email = $row['email'];
		$password = $row['password'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Bradford</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="#">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>

		<center><h4>Edit mobile</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">Id</label>
						<input type="text" name="id" value="<?php echo $id;?>" class="form-control"  disabled required>
					</div>
					<div class="form-group">
						<label for="mobile">Name</label>
						<input type="text" name="name" value="<?php echo $name;?>" class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" value="<?php echo $email;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Password</label>
						<input type="text" name="password" value="<?php echo $password;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" name="mobile" value="<?php echo $mobile;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Address</label>
						<input type="text" name="address" value="<?php echo $address;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Users</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
	if(isset($_POST['update'])){
		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to update data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$query = "update users set name = '$_POST[name]',email = '$_POST[email]',password = '$_POST[password]',mobile = '$_POST[mobile]',address = '$_POST[address]' where id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:users.php");
	}
?>