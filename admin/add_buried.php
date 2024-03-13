<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Record</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">

  		function alertMsg(){
  			alert(Record added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
	<link rel="stylesheet" href="../css/nav.css">
</head>
<body>
	<!-- navbar to show admin name and email -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<!-- navbar 2 --- options to navigate through pages -->
	<div class="navheader">
<div class="navcontainer">
<div class="logo"><a href="#"><img src="../images/BradfordWW1_logo7-300x136.png" width="200px" alt=""></a></div>
  <div class="navmain">
    <a href="admin_dashboard.php">Home</a>
    <a href="add_memorial.php">Memorial</a>
    <a href="add_buried.php">Buried</a>
    <a href="add_warroll.php">War Roll</a>
    <a href="add_biography.php">Biography</a></a>
    <a href="add_newspaper.php">Newspaper Ref</a>
  </div>
</div>
  </div><br>
	<!-- form to add data in table -->
		<center><h4>Add a new Record</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="text">Buried id</label>
						<input type="text" name="buried_id" class="form-control"   required>
					</div>
					<div class="form-group">
						<label for="text">Surname</label>
						<input type="text" name="surname"  class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="text">Forename</label>
						<input type="text" name="forename" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Age</label>
						<input type="text" name="age" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Medals</label>
						<input type="text" name="medals" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Date Of Death</label>
						<input type="date" name="date_of_death"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Rank</label>
						<input type="text" name="rank" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Service Number</label>
						<input type="text" name="service_no" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Regiment</label>
						<input type="text" name="regiment" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Unit</label>
						<input type="text" name="unit" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Cemetery</label>
						<input type="text" name="cemetery" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Grave Reference</label>
						<input type="text" name="grave_ref" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Information</label>
						<input type="text" name="info" class="form-control" required>
					</div>
					<button type="submit" name="add_buried" class="btn btn-primary">Add Record</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php

// Add data in database.table "bf_buried"

// checking the connnections
	if(isset($_POST['add_buried']))
	{
		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to add data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$query = "insert into bf_buried values('$_POST[buried_id]','$_POST[surname]','$_POST[forename]','$_POST[age]','$_POST[medals]','$_POST[date_of_death]','$_POST[rank]','$_POST[service_no]','$_POST[regiment]','$_POST[unit]','$_POST[cemetery]','$_POST[grave_ref]','$_POST[info]')";
		$query_run = mysqli_query($connection,$query);
		// header("location:add_buried.php");
	}
?>
