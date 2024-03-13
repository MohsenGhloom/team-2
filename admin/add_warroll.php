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
// message displayed after adding data
  		function alertMsg(){
  			alert(Record added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
	<link rel="stylesheet" href="../css/nav.css">
</head>
<body>
	<!-- display name and email of admin -->
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
	<!-- navbar connect pages  -->
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
	<!-- form to add record in the table bf_rollof honor -->
		<center><h4>Add a new Record</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
				<div class="form-group">
						<label for="text">ID</label>
						<input type="text" name="roll_id" class="form-control"   required>
					</div>
					<div class="form-group">
						<label for="mobile">Gender</label>
						<input type="text" name="gender" class="form-control" required>
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
						<label for="mobile">Address</label>
						<input type="text" name="address" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Electoral Ward</label>
						<input type="text" name="elec_ward" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Town</label>
						<input type="date" name="town"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Rank</label>
						<input type="text" name="rank" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Regiment</label>
						<input type="text" name="reg" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Unit</label>
						<input type="text" name="unit" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Company</label>
						<input type="text" name="company" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Other Regiment</label>
						<input type="text" name="other_reg" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Other Unit</label>
						<input type="text" name="other_unit" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Other Company</label>
						<input type="text" name="other_com" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="text">British Medal (1)</label>
						<input type="text" name="bm1" class="form-control"   required>
					</div>
					<div class="form-group">
					<label for="text">British Medal (2)</label>
						<input type="text" name="bm2" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="text">Certificates</label>
						<input type="text" name="certificates"  class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="text">Mentioned (1)</label>
						<input type="text" name="men1" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mentioned(2)</label>
						<input type="text" name="men2" class="form-control" required>
					</div>
					<label for="text">Forign Medal(1)</label>
						<input type="text" name="fm1" class="form-control"   required>
					</div>
					<div class="form-group">
					<label for="text">Forign Medal(2)</label>
						<input type="text" name="fm2" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="text">Enlistment Date</label>
						<input type="date" name="enlist_date"  class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="text">Diascharged Date</label>
						<input type="date" name="discharged_date" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Death(in service) Date</label>
						<input type="text" name="death_ser_date" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Misc Norh Info</label>
						<input type="date" name="misc_norh_info"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Age</label>
						<input type="text" name="age" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Service No.</label>
						<input type="text" name="ser_no" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Other service no.</label>
						<input type="text" name="other_ser_no" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Cemetery/memorial</label>
						<input type="text" name="cem_mem" class="form-control" required>
					z</div>
					<div class="form-group">
						<label for="mobile">Cemetery/memorial ref</label>
						<input type="text" name="cem_mem_ref" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Cemetery/memorial country</label>
						<input type="text" name="cem_mem_country" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Additional cwgc info</label>
						<input type="text" name="add_cwcg_ifo" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">occupation</label>
						<input type="text" name="occupation" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Rejoined after Discharged</label>
						<input type="date" name="rej-dis"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Death cause unknown</label>
						<input type="text" name="death_unknown" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">kia</label>
						<input type="text" name="kia" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Dies of gas poisoning</label>
						<input type="text" name="dgas_poision" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Died in captivity</label>
						<input type="text" name="dcapt" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Ship Sank died</label>
						<input type="date" name="dship-sank"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Accidental death</label>
						<input type="text" name="daccident" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Died of wounds</label>
						<input type="text" name="dwounds" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Died of illness</label>
						<input type="text" name="dillness" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Served at home</label>
						<input type="text" name="ser_athome" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Served at home(illness)</label>
						<input type="date" name="ser_athome_ill"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Served at home(unfit)</label>
						<input type="text" name="ser_athome_unfit" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Western front</label>
						<input type="text" name="western_front" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Balkans</label>
						<input type="text" name="balkans" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Dardanelles/Galliopli</label>
						<input type="text" name="dard/gall" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Egypt/Palestine</label>
						<input type="date" name="egy_pal"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mesopotamia</label>
						<input type="text" name="meso" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Salonika</label>
						<input type="text" name="salonika" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">East Africa</label>
						<input type="text" name="east_africa" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Italy</label>
						<input type="text" name="italy" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Malta</label>
						<input type="date" name="malta"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Isle of man</label>
						<input type="text" name="isle_man" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Ireland</label>
						<input type="text" name="ireland" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">India</label>
						<input type="text" name="india" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Russia</label>
						<input type="text" name="russia" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Persia</label>
						<input type="date" name="persia"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Army of occupation -Turkey</label>
						<input type="text" name="occ_turkey" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Army of occupation -Germany</label>
						<input type="text" name="occ_germany" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Wounded during service</label>
						<input type="text" name="wds1" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Wounded during service x2</label>
						<input type="text" name="wds2" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Wounded during service 3+</label>
						<input type="date" name="wds3"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Gassed during service</label>
						<input type="text" name="gds" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">loss of limb</label>
						<input type="text" name="limb" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">loss of speech</label>
						<input type="text" name="speech" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">shell shock</label>
						<input type="text" name="shell_shock" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">ship sand survived</label>
						<input type="date" name="sship_sank"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Discharged-shell shock</label>
						<input type="text" name="dishell_shock" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Discharged-wounded</label>
						<input type="text" name="diswound" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Discharged-gas</label>
						<input type="text" name="disgassed" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Discharged-ill health</label>
						<input type="text" name="disill" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Discharged-physically unfit</label>
						<input type="text" name="disphyunfit" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Discharged-medically unfit</label>
						<input type="date" name="dismedunfit"  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Unfit fro overseas</label>
						<input type="text" name="unfit_overseas" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Overage/Underage</label>
						<input type="text" name="over_under_age" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Son claimed of</label>
						<input type="text" name="son_claim" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Captured</label>
						<input type="text" name="captured" class="form-control" required>
					</div>
                   
					<button type="submit" name="add_buried" class="btn btn-primary">Add Record</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
//check the coneection to database
	if(isset($_POST['add_buried']))
	{
		//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to add data in the table
		//4. to run the query 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$query = "insert into bf_buried values('$_POST[roll_id]','$_POST[gender]','$_POST[surname]','$_POST[forename]','$_POST[address]','$_POST[elec_ward]','$_POST[twon]','$_POST[rank]','$_POST[reg]','$_POST[unit]','$_POST[company]','$_POST[other_reg]','$_POST[grave_ref]','$_POST[info]')";
		$query_run = mysqli_query($connection,$query);
		// header("location:add_buried.php");
	}
?>
