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
    <title>Edit Bradford Memorials</title>

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
                <a href="../view/memorials.php"><button class="btn border-dark">Back</button></a>
                    <h4 class="text-center">Edit Bradford Memorials</h4>
                </div>
            </div>

        <div class="container"> 
<br />
<form class="form-horizontal" action="edit_memorials_save.php" method="post">    
<?php
include('../../connect.php');
if(isset($_POST['selector'])){
$id=$_POST['selector'];
 $N = count($id);
for($i=0; $i < $N; $i++)
{
$result ="SELECT * FROM bf_memorials where mem_id='$id[$i]'";
$query_run = mysqli_query($connection,$result);
while($row = mysqli_fetch_array($query_run))
{  ?>
	<div class="thumbnail" style="margin:auto; width:600px;">
	<div style="margin-left: 70px; margin-top: 20px;">
		<div class="control-group">
		<label class="control-label" for="inputEmail">Surname</label>
		<div class="controls">
		<input name="mem_id[]" type="hidden" value="<?php echo  $row['mem_id'] ?>" />
			<input name="surname[]" type="text" style="  font-weight:bold;" value="<?php echo $row['surname'] ?>" />
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputEmail">Forename</label>
		<div class="controls">
			<input name="forename[]" type="text" style="  font-weight:bold;" value="<?php echo $row['forename'] ?>" />
		</div>
		</div>
	
		<div class="control-group">
		<label class="control-label" for="inputEmail">Regiment</label>
		<div class="controls">
			<input name="regiment[]" type="text" style="  font-weight:bold;" value="<?php echo $row['regiment'] ?>" />
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputEmail">Unit</label>
		<div class="controls">
			<input name="unit[]" type="text" style="  font-weight:bold;" value="<?php echo $row['unit'] ?>" />
		</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="inputEmail">Memorial</label>
		<div class="controls">
			<input name="memorial[]" type="text" style="  font-weight:bold;" value="<?php echo $row['memorial'] ?>" />
		</div>
		</div>
        
		<div class="control-group">
		<label class="control-label" for="inputEmail">Memorial Address</label>
		<div class="controls">
			<input name="memorial_address[]" type="text" style="  font-weight:bold;" value="<?php echo $row['memorial_address'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Memorial Location</label>
		<div class="controls">
			<input name="memorial_location[]" type="text" style="  font-weight:bold;" value="<?php echo $row['memorial_location'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Memorial Post Code</label>
		<div class="controls">
			<input name="memorial_post_code[]" type="text" style="  font-weight:bold;" value="<?php echo $row['memorial_post_code'] ?>" />
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">District</label>
		<div class="controls">
			<input name="district[]" type="text" style="  font-weight:bold;" value="<?php echo $row['district'] ?>" />
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
	echo '<script>window.location.href = "../view/memorials.php";</script>';
}
?>
<input name="update" class="btn border-dark" style="margin-left: 165px;  " type="submit" value="Update" >
</form>

</div>
</body>
</html>