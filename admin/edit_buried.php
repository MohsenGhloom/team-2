<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$buried_id ="";
	$surname = "";
	$forename = "";
	$regiment = "";
	$unit = "";
	$age = "";
	$medals = "";
	$date_of_death = "";
	$rank = "";
	$cemetery = "";
//fecthing date from the databse to display it on the browser

	$query = "select * from bf_buried where buried_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$buried_id = $row['buried_id'];
		$surname = $row['surname'];
		$forename = $row['forename'];
        $age = $row['age'];
        $medals = $row['medals'];
		$date_of_death = $row['date_of_death'];
		$rank = $row['rank'];
		$regiment = $row['regiment'];
		$unit = $row['unit'];
		$cemetery = $row['cemetery'];
        $info = $row['info'];

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

		<center><h4>Edit Buried</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">Buried id</label>
						<input type="text" name="buried_id" value="<?php echo $buried_id;?>" class="form-control"  disabled required>
					</div>
					<div class="form-group">
						<label for="mobile">Surname</label>
						<input type="text" name="surname" value="<?php echo $forename;?>" class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Forename</label>
						<input type="text" name="forename" value="<?php echo $surname;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">age</label>
						<input type="text" name="age" value="<?php echo $age;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Medals</label>
						<input type="text" name="medals" value="<?php echo $medals;?>" class="form-control" required>
					</div>
                    	<div class="form-group">
						<label for="mobile">Date of Death</label>
						<input type="text" name="date_of_death" value="<?php echo $date_of_death;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Rank</label>
						<input type="text" name="rank" value="<?php echo $rank;?>" class="form-control" required>
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
						<label for="mobile">Cemetery</label>
						<input type="text" name="cemetery" value="<?php echo $cemetery;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Grave Reference</label>
						<input type="text" name="grave_ref" value="<?php echo $cemetery;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Information</label>
						<input type="text" name="info" value="<?php echo $info;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Buried</button>
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
		$query = "update bf_buried set surname = '$_POST[surname]',forename = '$_POST[forename]',age = '$_POST[age]',medals = '$_POST[medals]',date_of_death = '$_POST[date_of_death]',rank = '$_POST[rank]',regiment = '$_POST[regiment]',unit = '$_POST[unit]',cemetery = '$_POST[cemetery]',grave_ref = '$_POST[grave_ref]',info = '$_POST[info]' where buried_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:buried.php");
	}
?>