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
	<!-- navbar ro show admin name and email -->
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
		<!-- navbar to navigate through pages -->
	</nav><br>
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
  <!-- form to add record in databse -->
		<center><h4>Add a new Record</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">ID</label>
						<input type="text" name="nr_id"  class="form-control"  disabled required>
					</div>
					<div class="form-group">
						<label for="mobile">Name</label>
						<input type="text" name="name"  class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Rank</label>
						<input type="text" name="rank" value="" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Age</label>
						<input type="text" name="age"  class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Address</label>
						<input type="text" name="address"  class="form-control" required>
                    </div>
					<div class="form-group">
						<label for="mobile">Regiment</label>
						<input type="text" name="regiment"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Comment Category</label>
						<input type="text" name="comment_catagory"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Comment Date</label>
						<input type="text" name="comment_date"  class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Newspaper Name</label>
						<input type="text" name="newspaper_name"  class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Paper Date</label>
						<input type="text" name="paaper_date"  class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Page/Col</label>
						<input type="text" name="page_col"  class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Photo</label>
						<input type="text" name="photo"  class="form-control" required>
					</div>
                   
				
					<button type="submit" name="add_newspaper" class="btn btn-primary">Add Record</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
//check whether the database is connected or not
	if(isset($_POST['add_newspaper']))
	{

		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to add data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
        $query = "insert bf_np_ref values('$_POST[nr_id]','$_POST[name]',rank = '$_POST[rank]',age = '$_POST[age]',address = '$_POST[address]',regiment = '$_POST[regiment]',comment_catagory = '$_POST[comment_catagory]',comment_date = '$_POST[comment_date]',grave_ref = '$_POST[grave_ref]',newspaper_name = '$_POST[newspaper_name]')";
		
		$query_run = mysqli_query($connection,$query);
		header("location:newspaper.php");
	}
?>
