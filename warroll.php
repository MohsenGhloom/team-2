<?php 
// attaching all the php files
   
session_start();
include("../../usercon.php");      //checking user logged in connections
include("../../connect.php");       //checking the database connections
include("../header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll of Honour</title>

     <!-- STYLE -->
     <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>


    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>   
    <style>
        td label{
            font-size: 14px;
        }
        
    </style>

</head>
<body>
    <div>
        <!-- navbar to show user details -->
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
        <!--navbar to display menubar -->
        <div class="navheader">
            <div class="navcontainer">
                <div class="logo">
                    <a href="../user_dashboard.php"><img src="../../images/BradfordWW1_logo7-300x136.png" alt="" width="200px"></a>
                </div>
                <div class="navmain">
                    <a style="text-decoration:none; color:inherit;" href="../user_dashboard.php">Home</a>
                    <a style="text-decoration:none; color:inherit;" href="memorials.php">Memorials</a>
                    <a style="text-decoration:none; color:inherit;" href="buried.php">Buried</a>
                    <a style="text-decoration:none; color:inherit;" href="biography.php">Biography</a>
                    <a style="text-decoration:none; color:inherit;" href="newspaper.php">Newspaper Ref</a>
                    <a style="text-decoration:none; color:inherit;" href="warroll.php">War Rolls</a>
                    
               </div>
            </div>
        </div>

<div class="container">
<br>
<br>
<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-sm table-striped table-bordered" id="example">
	<div class="row mb-2">
                <div class="col-md-12">
                <h4 class="text-center">Records of Those who Buried in Bradford</h4>
					
                </div>  
				<hr>
    </div>

		<!-- option navbar -->
		<div class="row justify-content-center m-5">
			
			<div class="col-sm-2"><button class="btn border-dark" formaction="../edit/edit_warroll.php">Update</button></div>
			<div class="col-sm-2"><button class="btn border-dark" formaction="../delete/delete_warroll.php">Delete</button></div>		

			
		</div>
		
		

		<!-- navbar ended -->
        <thead>
            <tr>
                
                                <th>Gender</th>
 
                                <th>Surname</th>

                                <th>Forename</th>

                                <th>Address</th>

                                <th>Electoral Ward</th>

                                <th>Town</th>

                                <th>Rank</th>

                                <th>Regiment</th>

                                <th>Unit</th>

                                <th>Company</th>

                                <th>Other Regiment</th>

                                <th>Other Unit</th>

                                <th>Other Company</th>

                                <th>British Medal (1)</th>

                                <th>British Medal (2)</th>

                                <th>Certificates</th>

                                <th>Mentioned (1)</th>

                                <th>Mentioned (2)</th>

                                <th>Forign Medal (1)</th>

                                <th>Forign Medal (2)</th>

                                <th>Enlistment Date</th>

                                <th>Enlistment Date Format</th>

                                <th>Discharged Date Format</th>

                                <th>Discharged Date</th>

                                <th>Death in Service Format</th>

                                <th>Death(in service) Date</th>

                                <th>Misc Norh Info</th>

                                <th>Age</th>

                                <th>Service No.</th>

                                <th>Other Service No.</th>

                                <th>Cemetery/Memorial</th>

                                <th>Cemetery Memorial Ref</th>

                                <th>Cemetery/Memorial Country</th>

                                <th>Additional CWGC Info</th>

                                <th>Occupation</th>

                                <th>Munitions factory worker</th>

                                <th>Rejoined after discharged</th>

                                <th>Death cause unknown</th>

                                <th>Kia</th>

                                <th>Died of gas poisoning</th>

                                <th>Died in captivity</th>

                                <th>Ship Sank Survived</th>

                                <th>Ship Sank-died</th>

                                <th>Accidental Death</th>

                                <th>Died of Wounds</th>

                                <th>Died of illness</th>

                                <th>Served at home</th>

                                <th>Served at home(ill health)</th>

                                <th>Served at home(unfit)</th>

                                <th>Western Front</th>

                                <th>Balkans</th>

                                <th>Dardanelles/Gallipoli</th>

                                <th>Egypt/Palestine</th>

                                <th>Mesopotamia</th>

                                <th>Salonika</th>

                                <th>East Africa</th>

                                <th>Italy</th>

                                <th>Malta</th>

                                <th>Isle of man</th>

                                <th>Ireland</th>

                                <th>India</th>

                                <th>Russia</th>

                                <th>At Sea</th>

                                <th>Persia</th>

                                <th>Army of occupation -Turkey</th>

                                <th>Army of occupation -Germany</th>

                                <th>Wounded during service</th>

                                <th>Wounded during service x2</th>

                                <th>Wounded during service 3+</th>

                                <th>Gassed during service</th>

                                <th>Loss oflimb</th>

                                <th>loss of speech</th>

                                <th>loss of sight</th>

                                <th>Shell shock</th>

                                <th>ship sank-Survived</th>

                                <th>Dischaged-shell shock</th>

                                <th>Discharged-wounded</th>

                                <th>Discharged-gas</th>

                                <th>Dischaged-ill health</th>

                                <th>Discharged-physically unfit</th>

                                <th>Discharged-medically unfit</th>

                                <th>Unfit for overseas</th>

                                <th>Overage/Underage</th>

                                <th>Son claimed out</th>

                                <th>Captured</th>
                                <th>select</th>
            </tr>
        </thead>

        <tbody>
		<?php 
		$query="select * from bf_rollofhonour";
		$query_run = mysqli_query($connection,$query) ;
while($row = mysqli_fetch_array($query_run)){
		$id=$row['roll_id'];
		?>
            <tr>
                
            <td style="text-align:center;"><?php echo $row['gender']?>

<td style="text-align:center;"><?php echo $row['surname']?>

<td style="text-align:center;"><?php echo $row['forename']?>

<td style="text-align:center;"><?php echo $row['address']?>

<p class="align-text-bottom"><td style="text-align:center;"><?php echo $row['elec_ward']?>

<td style="text-align:center;"><?php echo $row['town']?>

<td style="text-align:center;"><?php echo $row['rank']?>

<td style="text-align:center;"><?php echo $row['reg']?>

<td style="text-align:center;"><?php echo $row['unit']?>

<td style="text-align:center;"><?php echo $row['company']?>

<td style="text-align:center;"><?php echo $row['other_reg']?>

<td style="text-align:center;"><?php echo $row['other_unit']?>

<td style="text-align:center;"><?php echo $row['other_com']?>

<td style="text-align:center;"><?php echo $row['bm1']?>

<td style="text-align:center;"><?php echo $row['bm2']?>

<td style="text-align:center;"><?php echo $row['certificates']?>

<td style="text-align:center;"><?php echo $row['men1']?>

<td style="text-align:center;"><?php echo $row['men2']?>

<td style="text-align:center;"><?php echo $row['fm1']?>

<td style="text-align:center;"><?php echo $row['fm2']?>

<td style="text-align:center;"><?php echo $row['enlist_date']?>

<td style="text-align:center;"><?php echo $row['elist_date_format']?>

<td style="text-align:center;"><?php echo $row['discharge_dare_format']?>

<td style="text-align:center;"><?php echo $row['discharge_date']?>

<td style="text-align:center;"><?php echo $row['death_ser_format']?>

<td style="text-align:center;"><?php echo $row['death_ser_date']?>

<td style="text-align:center;"><?php echo $row['misc_norh_info']?>

<td style="text-align:center;"><?php echo $row['age']?>

<td style="text-align:center;"><?php echo $row['ser_no']?>

<td style="text-align:center;"><?php echo $row['other_ser_no']?>

<td style="text-align:center;"><?php echo $row['cem_mem']?>

<td style="text-align:center;"><?php echo $row['cem_mem_ref']?>

<td style="text-align:center;"><?php echo $row['cem_mem_country']?>

<td style="text-align:center;"><?php echo $row['add_cwcg_ifo']?>

<td style="text-align:center;"><?php echo $row['occupation']?>

<td style="text-align:center;"><?php echo $row['mun_factory_worker']?>

<td style="text-align:center;"><?php echo $row['rej_dis']?>

<td style="text-align:center;"><?php echo $row['death_unknown']?>

<td style="text-align:center;"><?php echo $row['kia']?>

<td style="text-align:center;"><?php echo $row['dgas_poision']?>

<td style="text-align:center;"><?php echo $row['dcapt']?>

<td style="text-align:center;"><?php echo $row['shipsunk_sur']?>

<td style="text-align:center;"><?php echo $row['dship_sank']?>

<td style="text-align:center;"><?php echo $row['daccident']?>

<td style="text-align:center;"><?php echo $row['dwounds']?>

<td style="text-align:center;"><?php echo $row['dillness']?>

<td style="text-align:center;"><?php echo $row['ser_athome']?>

<td style="text-align:center;"><?php echo $row['ser_athome_ill']?>

<td style="text-align:center;"><?php echo $row['ser_athome_unfit']?>

<td style="text-align:center;"><?php echo $row['western_front']?>

<td style="text-align:center;"><?php echo $row['balkans']?>

<td style="text-align:center;"><?php echo $row['dard_gall']?>

<td style="text-align:center;"><?php echo $row['egy_pal']?>

<td style="text-align:center;"><?php echo $row['meso']?>

<td style="text-align:center;"><?php echo $row['salonika']?>

<td style="text-align:center;"><?php echo $row['east_africa']?>

<td style="text-align:center;"><?php echo $row['italy']?>

<td style="text-align:center;"><?php echo $row['malta']?>

<td style="text-align:center;"><?php echo $row['isle_man']?>

<td style="text-align:center;"><?php echo $row['ireland']?>

<td style="text-align:center;"><?php echo $row['india']?>

<td style="text-align:center;"><?php echo $row['russia']?>

<td style="text-align:center;"><?php echo $row['at_sea']?>

<td style="text-align:center;"><?php echo $row['persia']?>

<td style="text-align:center;"><?php echo $row['occ_turkey']?>

<td style="text-align:center;"><?php echo $row['occ_germany']?>

<td style="text-align:center;"><?php echo $row['wds1']?>

<td style="text-align:center;"><?php echo $row['wds2']?>

<td style="text-align:center;"><?php echo $row['wds3']?>

<td style="text-align:center;"><?php echo $row['gds']?>

<td style="text-align:center;"><?php echo $row['limb']?>

<td style="text-align:center;"><?php echo $row['speech']?>

<td style="text-align:center;"><?php echo $row['sight']?>

<td style="text-align:center;"><?php echo $row['shell_shock']?>

<td style="text-align:center;"><?php echo $row['sship_sank']?>

<td style="text-align:center;"><?php echo $row['dishell_shock']?>

<td style="text-align:center;"><?php echo $row['diswound']?>

<td style="text-align:center;"><?php echo $row['disgassed']?>

<td style="text-align:center;"><?php echo $row['disill']?>

<td style="text-align:center;"><?php echo $row['disphyunfit']?>

<td style="text-align:center;"><?php echo $row['dismedunfit']?>

<td style="text-align:center;"><?php echo $row['unfit_overseas']?>

<td style="text-align:center;"><?php echo $row['over_under_age']?>

<td style="text-align:center;"><?php echo $row['son_claim']?>

<td style="text-align:center;"><?php echo $row['captured']?>

<td style="text-align:center;">
					<input name="selector[]" id="check" type="checkbox" value="<?php echo $id; ?>">
				</td>
            </tr>


<?php  } ?>


</tbody>
	</table>
	<br />				

</form>



</div>
</body>
</html>