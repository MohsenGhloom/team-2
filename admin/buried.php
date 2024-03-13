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
	<title>Buried</title>
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
		 <!-- nav bar to show admin name and email with logout option -->

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
		<center>
		<a href="add_buried.php"><button type="button" class="btn btn-primary">Add Record</button></a>
			<h4>Buried in Bradford</h4><br></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
										<!-- form to display Record from the table -->

								<td>ID</td>
                                <td>Surname</td>
                                <td>Forename</td>
                                <td>Age</td>
								<td>Medals</td>
								<td>Date of Death</td>
								<td>Rank</td>
								<td>Service Number</td>
								<td>Regiment</td>
								<td>Unit</td>
								<td>Cemetry</td>
                                <td>Grave Reference</td>
								<td>Information</td>
								
                                                        

                        </tr>
					</thead>
										<!-- fetching the database and connecting table rows -->

					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
						$query = "select * from bf_buried";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td> 
                                    <?php echo $row['buried_id']; ?> 
                                </td>
							<td> 
                                    <?php echo $row['surname']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['forename']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['age']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['medals']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['date_of_death']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['rank']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['service_no']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['regiment']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['unit']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['cemetery']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['grave_ref']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['info']; ?> 
                                </td>
                               
							   
								<td><button class="btn" name=""><a href="edit_buried.php?bn=<?php echo $row['buried_id'];?>">Edit</a></button>
								<button class="btn"><a href="delete_buried.php?bn=<?php echo $row['buried_id'];?>">Delete</a></button></td>
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
