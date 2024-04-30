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
    <title>Edit Roll of Honor</title>

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
   <div>
		<!-- navbar one -->
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
                <a href="../view/warroll.php"><button class="btn border-dark">Back</button></a>
					<h4 class="text-center">Edit Roll of Honor</h4>
				</div>
			</div>

            <div class="container"> 
            <form class="form-horizontal" action="edit_warroll_save.php" method="post">    
<br /><?php
include('../../connect.php');
if(isset($_POST['selector'])){
$id=$_POST['selector'];
 $N = count($id);
for($i=0; $i < $N; $i++)
{
$result ="SELECT * FROM bf_buried where buried_id='$id[$i]'";
$query_run = mysqli_query($connection,$result);
while($row = mysqli_fetch_array($query_run))
{  ?>


<?php 
}
}

}
else{
	echo '<script>alert("No data selected");</script>';
	echo '<script>window.location.href = "../view/buried.php";</script>';
}
?>
<input name="update" class="btn border-dark" style="margin-left: 165px;  " type="submit" value="Update" >

            </div>







			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">







                    <form action="" method="POST">
                    <div class="thumbnail" style="margin:auto; width:600px;">
	<div style="margin-left: 70px; margin-top: 20px;">


                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Gender</label>
                                    <div class="controls">
                                    <input name="roll_id[]" type="hidden" value="<?php echo  $row['roll_id'] ?>" />

                                    <input type="text" name="gender[]" value="<?php echo $row['gender'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Surname</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="surname[]" value="<?php echo $row['surname'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Forename</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="forename[]" value="<?php echo $row['forename'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Address</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="address[]" value="<?php echo $row['address'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Electoral Ward</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="elec_ward[]" value="<?php echo $row['elec_ward'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Town</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="town[]" value="<?php echo $row['town'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Rank</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="rank[]" value="<?php echo $row['rank'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Regiment</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="reg[]" value="<?php echo $row['reg'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Unit</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="unit[]" value="<?php echo $row['unit'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Company</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="company[]" value="<?php echo $row['company'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Other Regiment</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="other_reg[]" value="<?php echo $row['other_reg'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Other Unit</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="other_unit[]" value="<?php echo $row['other_unit'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Other Company</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="other_com[]" value="<?php echo $row['other_com'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">British Medal (1)</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="bm1[]" value="<?php echo $row['bm1'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">British Medal (2)</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="bm2[]" value="<?php echo $row['bm2'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Certificates</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="certificates[]" value="<?php echo $row['certificates'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Mentioned (1)</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="men1[]" value="<?php echo $row['men1'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Mentioned (2)</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="men2[]" value="<?php echo $row['men2'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Forign Medal (1)</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="fm1[]" value="<?php echo $row['fm1'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Forign Medal (2)</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="fm2[]" value="<?php echo $row['fm2'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Enlistment Date</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="enlist_date[]" value="<?php echo $row['enlist_date'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Enlistment Date Format</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="elist_date_format[]" value="<?php echo $row['elist_date_format'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Discharged Date Format</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="discharge_dare_format[]" value="<?php echo $row['discharge_dare_format'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Discharged Date</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="discharge_date[]" value="<?php echo $row['discharge_date'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Death in Service Format</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="death_ser_format[]" value="<?php echo $row['death_ser_format'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Death(in service) Date</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="death_ser_date[]" value="<?php echo $row['death_ser_date'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Misc Norh Info</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="misc_norh_info[]" value="<?php echo $row['misc_norh_info'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Age</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="age[]" value="<?php echo $row['age'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Service No.</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="ser_no[]" value="<?php echo $row['ser_no'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Other Service No.</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="other_ser_no[]" value="<?php echo $row['other_ser_no'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Cemetery/Memorial</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="cem_mem[]" value="<?php echo $row['cem_mem'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Cemetery Memorial Ref</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="cem_mem_ref[]" value="<?php echo $row['cem_mem_ref'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Cemetery/Memorial Country</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="cem_mem_country[]" value="<?php echo $row['cem_mem_country'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Additional CWGC Info</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="add_cwcg_ifo[]" value="<?php echo $row['add_cwcg_ifo'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Occupation</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="occupation[]" value="<?php echo $row['occupation'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Munitions factory worker</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="mun_factory_worker[]" value="<?php echo $row['mun_factory_worker'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Rejoined after discharged</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="rej_dis[]" value="<?php echo $row['rej_dis'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Death cause unknown</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="death_unknown[]" value="<?php echo $row['death_unknown'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Kia</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="kia[]" value="<?php echo $row['kia'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Died of gas poisoning</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="dgas_poision[]" value="<?php echo $row['dgas_poision'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Died in captivity</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="dcapt[]" value="<?php echo $row['dcapt'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Ship Sank Survived</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="shipsunk_sur[]" value="<?php echo $row['shipsunk_sur'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Ship Sank-died</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="dship_sank[]" value="<?php echo $row['dship_sank'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Accidental Death</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="daccident[]" value="<?php echo $row['daccident'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Died of Wounds</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="dwounds[]" value="<?php echo $row['dwounds'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Died of illness</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="dillness[]" value="<?php echo $row['dillness'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Served at home</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="ser_athome[]" value="<?php echo $row['ser_athome'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Served at home(ill health)</label>
                                    <div class="controls">                                 
                                    
                                    <input type="text" name="ser_athome_ill[]" value="<?php echo $row['ser_athome_ill'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Served at home(unfit)</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="ser_athome_unfit[]" value="<?php echo $row['ser_athome_unfit'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Western Front</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="western_front[]" value="<?php echo $row['western_front'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Balkans</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="balkans[]" value="<?php echo $row['balkans'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Dardanelles/Gallipoli</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="dard_gall[]" value="<?php echo $row['dard_gall'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Egypt/Palestine</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="egy_pal[]" value="<?php echo $row['egy_pal'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Mesopotamia</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="meso[]" value="<?php echo $row['meso'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Salonika</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="salonika[]" value="<?php echo $row['salonika'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">East Africa</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="east_africa[]" value="<?php echo $row['east_africa'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Italy</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="italy[]" value="<?php echo $row['italy'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Malta</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="malta[]" value="<?php echo $row['malta'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Isle of man</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="isle_man[]" value="<?php echo $row['isle_man'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Ireland</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="ireland[]" value="<?php echo $row['ireland'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">India</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="india[]" value="<?php echo $row['india'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Russia</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="russia[]" value="<?php echo $row['russia'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">At Sea</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="at_sea[]" value="<?php echo $row['at_sea'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Persia</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="persia[]" value="<?php echo $row['persia'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Army of occupation -Turkey</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="occ_turkey[]" value="<?php echo $row['occ_turkey'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Army of occupation -Germany</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="occ_germany[]" value="<?php echo $row['occ_germany'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Wounded during service</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="wds1[]" value="<?php echo $row['wds1'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Wounded during service x2</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="wds2[]" value="<?php echo $row['wds2'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Wounded during service 3+</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="wds3[]" value="<?php echo $row['wds3'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Gassed during service</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="gds[]" value="<?php echo $row['gds'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Loss oflimb</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="limb[]" value="<?php echo $row['limb'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">loss of speech</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="speech[]" value="<?php echo $row['speech'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">loss of sight</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="sight[]" value="<?php echo $row['sight'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Shell shock</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="shell_shock[]" value="<?php echo $row['shell_shock'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">ship sank-Survived</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="sship_sank[]" value="<?php echo $row['sship_sank'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Dischaged-shell shock</label>
                                    <div class="controls">                                    
                                    
                                    <input type="text" name="dishell_shock[]" value="<?php echo $row['dishell_shock'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Discharged-wounded</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="diswound[]" value="<?php echo $row['diswound'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Discharged-gas</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="disgassed[]" value="<?php echo $row['disgassed'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Dischaged-ill health</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="disill[]" value="<?php echo $row['disill'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Discharged-physically unfit</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="disphyunfit[]" value="<?php echo $row['disphyunfit'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Discharged-medically unfit</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="dismedunfit[]" value="<?php echo $row['dismedunfit'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Unfit for overseas</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="unfit_overseas[]" value="<?php echo $row['unfit_overseas'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Overage/Underage</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="over_under_age[]" value="<?php echo $row['over_under_age'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Son claimed out</label>
                                    <div class="controls">
                                    
                                    <input type="text" name="son_claim[]" value="<?php echo $row['son_claim'] ?>" class="form-control">    
                                </div>
                                </div>
                                <div class="control-group">
                                    <label  class="control-label" for="inputEmail">Captured</label>
                                    <div class="controls"> 
                                    
                                    <input type="text" name="captured[]" value="<?php echo $row['captured'] ?>" class="form-control">                     
                                </div>
                                </div>
                    </form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
   </div>


</body>
</html>