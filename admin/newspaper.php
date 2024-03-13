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
	<title>Newspaper</title>
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
		<a href="add_newspaper.php"><button type="button" class="btn btn-primary">Add Record</button></a>
			<h4>Newspaper Reference</h4><br></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="table table-bordered table-hover">
					<thead>
																<!-- form to display Record from the table -->

					<tr>
								<td>ID</td>
                                <td>Name</td>
                                <td>Rank</td>
                                <td>Age</td>
								<td>Address</td>
								<td>Regiment</td>
								<td>Comment Catagory</td>
								<td>Comment Date</td>
								<td>Newspaper Name</td>
								<td>Paper Date</td>
								<td>Page/col</td>
                                <td>Photo</td>
								
								
                                                        

                        </tr>
					</thead>
															<!-- fetching the database and connecting table rows -->

					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
						$query = "select * from bf_np_ref";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
                            <td> 
                                    <?php echo $row['nr_id']; ?> 
                                </td>
							<td> 
                                    <?php echo $row['name']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['rank']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['age']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['address']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['regiment']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['comment_catagory']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['comment_date']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['newspaper_name']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['paper_date']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['page_col']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['photo']; ?> 
                                </td>
                               
							   
								<td><button class="btn" name=""><a href="edit_newspaper.php?bn=<?php echo $row['nr_id'];?>">Edit</a></button>
								<button class="btn"><a href="delete_book.php?bn=<?php echo $row['nr_id'];?>">Delete</a></button></td>
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
