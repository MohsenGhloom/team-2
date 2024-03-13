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
	<title>Roll of Honor</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert(Book added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<body>
    		 <!-- nav bar to show admin name and email with logout option -->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:100%">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Bradford</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="#">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
    		<!-- navbar 2 --- options to navigate through pages -->

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
			  <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Admin</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manaddress_author.php">Manaddress Admin</a>
	        	</div>
		      </li>
	          
		    </ul>
		</div>
	</nav><br>
	
		<center>
		<a href="add_buried.php"><button type="button" class="btn btn-primary">Add Record</button></a>
			<h4>Great War Roll of Honour</h4><br></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="table table-bordered table-hover">
					<thead>
                        										<!-- form to display Record from the table -->

					<tr>
								<td>ID</td>
                                <td>Gender</td>
                                <td>Surname</td>
                                <td>Forename</td>
                                <td>Address</td>
								<td>Electoral Ward</td>
								<td>Town</td>
								<td>Rank</td>
								<td>Regiment</td>
								<td>Unit</td>
								<td>Company</td>
								<td>Other Regiment</td>
                                <td>Other Unit</td>
								<td>Other Company</td>
                                <td>British Medal (1)</td>
								<td>British Medal (2)</td>
								<td>Certificates</td>
								<td>Mentioned (1)</td>
								<td>Mentioned (2)</td>
                                <td>Forign Medal (1)</td>
                                <td>Forign Medal (2)</td>
								<td>Enlistment Date</td>
                                <td>Discharged Date</td>
                                <td>Death(in service) Date</td>
                                <td>Misc Norh Info</td>
                                <td>Age</td>
                                <td>Service No.</td>
                                <td>Other Service No.</td>
                                <td>Cemetery/Memorial</td>
                                <td>Cemetery Memorial Ref</td>
                                <td>Cemetery/Memorial Country</td>
                                <td>Additional CWGC Info</td>
                                <td>Occupation</td>
                                <td>Rejoined after discharged</td>
                                <td>Death cause unknown</td>
                                <td>Kia</td>
                                <td>Died of gas poisoning</td>
                                <td>Died in captivity</td>
                                <td>Ship Sank-died</td>
                                <td>Accidental Death</td>
                                <td>Died of Wounds</td>
								<td>Died of illness</td>
								<td>Served at home</td>
								<td>Served at home(ill health)</td>
								<td>Served at home(unfit)</td>
								<td>Western Front</td>
								<td>Balkans</td>
                                <td>Dardanelles/Gallipoli</td>
                                <td>Egypt/Palestine</td>
                                <td>Mesopotamia</td>
                                <td>Salonika</td></td>
                                <td>East Africa</td>
								<td>Italy</td>
								<td>Malta</td>
								<td>Isle of man</td>
								<td>Ireland</td>
								<td>India</td>
								<td>Russia</td>
                                <td>Persia</td>
                                <td>Army of occupation -Turkey</td>
                                <td>Army of occupation -Germany</td>
								<td>Wounded during service</td>
								<td>Wounded during service x2</td>
								<td>Wounded during service 3+</td></td>
								<td>Gassed during service</td>
								<td>Loss oflimb</td>
								<td>loss of speech</td>
                                <td>Shell shock</td>
								<td>ship sank-Survived</td>
								<td>Dischaged-shell shock</td></td>
								<td>Discharged-wounded</td>
								<td>Discharged-gas</td>
								<td>Dischaged-ill health</td>
                                <td>Discharged-physically unfit</td> 
                                <td>Discharged-medically unfit</td>
                                <td>Unfit for overseas</td> 
                                <td>Overage/Underage</td>   
                                <td>Son claimed out</td>
                                <td>Captured</td>                   

                        </tr>
					</thead>
                    										<!-- fetching the database and connecting table rows -->

					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
						$query = "select * from bf_rollofhonour";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td> 
                                    <?php echo $row['roll_id']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['gender']; ?> 
                                </td>
							<td> 
                                    <?php echo $row['surname']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['forename']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['address']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['elec_ward']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['town']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['rank']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['reg']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['unit']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['Company']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['other_reg']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['other_unit']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['other_com']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['bm1']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['bm2']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['certificates']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['men1']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['men2']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['fm1']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['fm2']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['enlist_date']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['discharge_date']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['death_ser_date']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['misc_norh_info']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['age']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['ser_no']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['other_ser_no']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['cem_mem']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['cem_mem_country']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['add_cwcg_ifo']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['occupation']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['rej_dis']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['death_unknown']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['kia']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dgas_poision']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dcapt']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dship_sank']; ?> 
                                </td>
							<td> 
                                    <?php echo $row['daccident']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dwounds']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dillness']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['ser_athome']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['ser_athome_ill']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['ser_athome_unfit']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['western_front']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['balkans']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['dard_gall']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['egy_pal']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['meso']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['salonika']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['east_africa']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['italy']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['malta']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['isle_man']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['ireland']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['india']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['russia']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['persia']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['occ_turkey']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['occ_germany']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['wds1']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['wds2']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['wds3']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['gds']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['limb']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['speech']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['shell_shock']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['sship_sank']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dishell_shock']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['diswound']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['disgassed']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['disill']; ?> 
                                </td>
                                
                                <td> 
                                    <?php echo $row['disphyunfit']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['dismedunfit']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['unfit_overseas']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['over_under_age']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['son_claim']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['captured']; ?> 
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
