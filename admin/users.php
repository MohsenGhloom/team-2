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
	<title>Manage Record</title>
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
		      
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Records </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Great War Roll of Honour</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="buried.php">Names of those buried in Bradford </a>
					<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="memorials.php">Names recorded on Bradford Memorials</a>
					<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="newspaper.php">Newspaper references</a>
					<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="biography.php"> Biography information</a>
	        	</div>
		      </li>
			  
	          
		    </ul>
		</div>
	</nav><br>
	
		<center>
			<a href="add_user.php"><button type="button" class="btn btn-primary md-5">Add Record</button></a>
			<h4>Users</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
								<td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Password</td>
                                <td>Mobile</td>
                                <td>Address</td>
                                                            

                        </tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
						$query = "select * from users";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td> 
                                    <?php echo $row['id']; ?> 
                                </td>
							<td> 
                                    <?php echo $row['name']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['email']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['password']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['mobile']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['address']; ?> 
                                </td>
                                
								<td><button class="btn" name=""><a href="edit_users.php?bn=<?php echo $row['id'];?>">Edit</a></button>
								<button class="btn"><a href="delete_users.php?bn=<?php echo $row['id'];?>">Delete</a></button></td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
