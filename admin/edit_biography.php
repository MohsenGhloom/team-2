<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$bioinfo_id ="";
	$surname = "";
	$forename = "";
	$regiment = "";
	$service_no = "";
	$biography = "";
	//fecthing date from the databse to display it on the browser
	$query = "select * from bf_biography_info where bioinfo_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$bioinfo_id = $row['bioinfo_id'];
		$surname = $row['surname'];
		$forename = $row['forename'];
		$regiment = $row['regiment'];
		$service_no = $row['service_no'];
		$biography = $row['biography'];
		

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

		<center><h4>Edit biography</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">ID</label>
						<input type="text" name="bioinfo_id" value="<?php echo $bioinfo_id;?>" class="form-control"  disabled required>
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
						<label for="mobile">Service Number</label>
						<input type="text" name="service_no" value="<?php echo $service_no;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">biography</label>
						<input type="text" name="biography" value="<?php echo $biography;?>" class="form-control" required>
					</div>
					
					<button type="submit" name="update" class="btn btn-primary">Update biography</button>
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
		$query = "update bf_biography_info set surname = '$_POST[surname]',forename = '$_POST[forename]',regiment = '$_POST[regiment]',service_no = '$_POST[service_no]',biography = '$_POST[biography]' where bioinfo_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:biography.php");
	}
?>