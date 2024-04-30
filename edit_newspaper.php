<?php
include("../../functions.php");
session_start();
include("../../usercon.php");
include('../header.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Newspaper References</title>

     <!-- STYLE -->
     <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- navbar one -->
    <div>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid text-light">
                <span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>
                <span><strong>Email: <?php echo $_SESSION['email'];?></strong></span>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item text-light">
                        <a class="nav-link" href="../../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                <a href="../view/newspaper.php"><button class="btn border-dark">Back</button></a>
				<h4 class="text-center">Edit Newspaper References</h4>
                </div>
            </div>

        <div class="container"> 
<br />
<form class="form-horizontal" action="edit_newspaper_save.php" method="post">    
<?php
include('../../connect.php');
if(isset($_POST['selector'])){
$id=$_POST['selector'];
 $N = count($id);
for($i=0; $i < $N; $i++)
{
$result ="SELECT * FROM bf_np_ref where nr_id='$id[$i]'";
$query_run = mysqli_query($connection,$result);
while($row = mysqli_fetch_array($query_run))
{  ?>
	<div class="thumbnail" style="margin:auto; width:600px;">
	<div style="margin-left: 70px; margin-top: 20px;">
		<div class="control-group">
		<label class="control-label" for="inputEmail">Name</label>
		<div class="controls">
		<input name="nr_id[]" type="hidden" value="<?php echo  $row['nr_id'] ?>" />
			<input name="name[]" type="text" style="  font-weight:bold;" value="<?php echo $row['name'] ?>" />
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputEmail">Rank</label>
		<div class="controls">
			<input name="rank[]" type="text" style="  font-weight:bold;" value="<?php echo $row['rank'] ?>" />
		</div>
		</div>

        <div class="control-group">
		<label class="control-label" for="inputEmail">Age</label>
		<div class="controls">
			<input name="age[]" type="text" style="  font-weight:bold;" value="<?php echo $row['age'] ?>" />
		</div>
		</div>

		<div class="control-group">
		<label class="control-label" for="inputEmail">Address</label>
		<div class="controls">
			<input name="address[]" type="text" style="  font-weight:bold;" value="<?php echo $row['address'] ?>" />
		</div>
		</div>
	
		<div class="control-group">
		<label class="control-label" for="inputEmail">Regiment</label>
		<div class="controls">
			<input name="regiment[]" type="text" style="  font-weight:bold;" value="<?php echo $row['regiment'] ?>" />
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputEmail">Comment Category</label>
		<div class="controls">
			<input name="comment_catagory[]" type="text" style="  font-weight:bold;" value="<?php echo $row['comment_catagory'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Comment Data</label>
		<div class="controls">
			<input name="comment_data[]" type="text" style="  font-weight:bold;" value="<?php echo $row['comment_data'] ?>" />
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputEmail">Comment Date</label>
		<div class="controls">
			<input name="comment_date[]" type="text" style="  font-weight:bold;" value="<?php echo $row['comment_date'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Newspaper Name</label>
		<div class="controls">
			<input name="newspaper_name[]" type="text" style="  font-weight:bold;" value="<?php echo $row['newspaper_name'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Paper Date</label>
		<div class="controls">
			<input name="paper_date[]" type="text" style="  font-weight:bold;" value="<?php echo $row['paper_date'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Page/Col</label>
		<div class="controls">
			<input name="page_col[]" type="text" style="  font-weight:bold;" value="<?php echo $row['page_col'] ?>" />
		</div>
		</div>
       

	</div>
	</div>

	<br />	
<?php 
}
}

}
else{
	echo '<script>alert("No data selected");</script>';
	echo '<script>window.location.href = "../view/newspaper.php";</script>';
}
?>
<input name="update" class="btn border-dark" style="margin-left: 165px;  " type="submit" value="Update" >

</form>

</div>
</body>
</html>
