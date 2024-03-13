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
// after record the messange will be displayed
  		function alertMsg(){
  			alert(Record added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
	<link rel="stylesheet" href="../css/nav.css">
</head>
<body>
	<!-- navbar to show admin name and email with logout button -->
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
	<!-- navbar to navigate through the pages -->
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
						<label for="mobile">Id</label>
						<input type="text" name="id" class="form-control"   required>
					</div>
					<div class="form-group">
						<label for="mobile">Name</label>
						<input type="text" name="name"  class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Password</label>
						<input type="text" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" name="mobile" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Address</label>
						<input type="text" name="address"  class="form-control" required>
					</div>
					
					<button type="submit" name="add_biography" class="btn btn-primary">Add Record</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
//check the connection of databse
	if(isset($_POST['add_biography']))
	{
		//check the coneection to database
		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to add data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$query = "insert into users values('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[address]')";
		$query_run = mysqli_query($connection,$query);
		// header("location:add_biography.php");
	}
?>
