<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$nr_id ="";
	$name = "";
	$rank = "";
	$regiment = "";
	$comment_catagory = "";
	$age = "";
	$address = "";
	$date_of_death = "";

	$comment_date = "";

	$query = "select * from bf_np_ref where nr_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$nr_id = $row['nr_id'];
		$name = $row['name'];
		$rank = $row['rank'];
        $age = $row['age'];
        $address = $row['address'];	
		$regiment = $row['regiment'];
		$comment_catagory = $row['comment_catagory'];
		$comment_date = $row['comment_date'];
        $newspaper_name = $row['newspaper_name'];
        $paper_date = $row['paper_date'];
		$page_col = $row['page_col'];
        $photo = $row['photo'];

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Newspaper Reference</title>
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
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>

		<center><h4>Edit Newspaper Reference</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="mobile">ID</label>
						<input type="text" name="nr_id" value="<?php echo $nr_id;?>" class="form-control"  disabled required>
					</div>
					<div class="form-group">
						<label for="mobile">Name</label>
						<input type="text" name="name" value="<?php echo $rank;?>" class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Rank</label>
						<input type="text" name="rank" value="<?php echo $name;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Age</label>
						<input type="text" name="age" value="<?php echo $age;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Address</label>
						<input type="text" name="address" value="<?php echo $address;?>" class="form-control" required>
                    </div>
					<div class="form-group">
						<label for="mobile">Regiment</label>
						<input type="text" name="regiment" value="<?php echo $regiment;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Comment Category</label>
						<input type="text" name="comment_catagory" value="<?php echo $comment_catagory;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Comment Date</label>
						<input type="text" name="comment_date" value="<?php echo $comment_date;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Newspaper Name</label>
						<input type="text" name="newspaper_name" value="<?php echo $newspaper_name;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Paper Date</label>
						<input type="text" name="paaper_date" value="<?php echo $paper_date;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Page/Col</label>
						<input type="text" name="page_col" value="<?php echo $page_col;?>" class="form-control" required>
					</div>
                 
					<button type="submit" name="update" class="btn btn-primary">Update Newspaper Refernce</button>
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
		$query = "update bf_np_ref set name = '$_POST[name]',rank = '$_POST[rank]',age = '$_POST[age]',address = '$_POST[address]',regiment = '$_POST[regiment]',comment_catagory = '$_POST[comment_catagory]',comment_date = '$_POST[comment_date]',newspaper_name = '$_POST[newspaper_name]' where nr_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:buried.php");
	}
?>