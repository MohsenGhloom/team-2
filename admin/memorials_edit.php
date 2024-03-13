<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$mem_id ="";
	$surname = "";
	$forename = "";
	$regiment = "";
	$unit = "";
	$memorial = "";
	$memorial_address = "";
	$memorial_location = "";
	$memorial_post_code = "";
	$district = "";

//fecthing date from the databse to display it on the browser
	$query = "select * from bf_memorials where mem_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$mem_id = $row['mem_id'];
		$surname = $row['surname'];
		$forename = $row['forename'];
		$regiment = $row['regiment'];
		$unit = $row['unit'];
		$memorial = $row['memorial'];
		$memorial_address = $row['memorial_address'];
		$memorial_location = $row['memorial_location'];
		$memorial_post_code = $row['memorial_post_code'];
		$district = $row['district'];

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

		<center><h4>Edit memorial</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">Memorial id</label>
						<input type="text" name="mem_id" value="<?php echo $mem_id;?>" class="form-control"  disabled required>
					</div>
					<div class="form-group">
						<label for="mobile">Forename</label>
						<input type="text" name="forename" value="<?php echo $forename;?>" class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Surname</label>
						<input type="text" name="surname" value="<?php echo $surname;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Regiment</label>
						<input type="text" name="regiment" value="<?php echo $regiment;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Unit</label>
						<input type="text" name="unit" value="<?php echo $unit;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial</label>
						<input type="text" name="memorial" value="<?php echo $memorial;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial Address:</label>
						<input type="text" name="memorial_address" value="<?php echo $memorial_address;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial Location</label>
						<input type="text" name="memorial_location" value="<?php echo $memorial_location;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial Post Code</label>
						<input type="text" name="memorial_post_code" value="<?php echo $memorial_post_code;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">District</label>
						<input type="text" name="district" value="<?php echo $district;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update memorial</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
//check the coneection to database
	if(isset($_POST['update'])){
		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to update data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$query = "update bf_memorials set surname = '$_POST[surname]',forename = '$_POST[forename]',regiment = '$_POST[regiment]',unit = '$_POST[unit]',memorial = '$_POST[memorial]',memorial_address = '$_POST[memorial_address]',memorial_location = '$_POST[memorial_location]',memorial_post_code = '$_POST[memorial_post_code]',district = '$_POST[district]' where mem_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:memorials.php");
	}
?>