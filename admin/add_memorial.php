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
	<!-- style links -->
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
	<!-- display admin name and email here -->
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
	<!-- navbar to connect the pages -->
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
  <!-- form to add the record -->
		<center><h4>Add a new Record</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">Memorial id</label>
						<input type="text" name="mem_id" class="form-control"   required>
					</div>
					<div class="form-group">
						<label for="mobile">Forename</label>
						<input type="text" name="forename"  class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Surname</label>
						<input type="text" name="surname" class="form-control" required>
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
						<label for="mobile">Memorial</label>
						<input type="text" name="memorial"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial Address:</label>
						<input type="text" name="memorial_address" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial Location</label>
						<input type="text" name="memorial_location" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Memorial Post Code</label>
						<input type="text" name="memorial_post_code" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">District</label>
						<input type="text" name="district" class="form-control" required>
					</div>
					<button type="submit" name="add_memorial" class="btn btn-primary">Add Record</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
	//check whether the database is connected or not
	if(isset($_POST['add_memorial']))
	{
		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to add data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$query = "insert into bf_memorials values('$_POST[mem_id]','$_POST[surname]','$_POST[forename]','$_POST[regiment]','$_POST[unit]','$_POST[memorial]','$_POST[memorial_address]','$_POST[memorial_location]','$_POST[memorial_post_code]','$_POST[district]')";
		$query_run = mysqli_query($connection,$query);
		//header("location:memorials.php");
	}
?>
