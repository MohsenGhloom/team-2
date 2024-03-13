<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biography Information</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert(Record added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<body>
            	<!-- navbar --- options to navigate through pages -->

<div class="navheader">
        <div class="navcontainer">
          <div class="logo"><a href="#"><img src="images/BradfordWW1_logo7-300x136.png" width="200px" alt=""></a></div>
          <div class="navmain">
          <a href="user_dashboard.php">Home</a>
    <a  href="user_memorials.php?search=">Memorial <span class="sr-only"></span></a> 
         <a href="user_buried.php?search=">Buried</a>
      <a href="user_biography.php?search=">Biography</a>
      <a href="user_warroll.php?search=">War Roll</a>
      <a href="user_newspaper.php?search=">Newspaper</a>
          </div>
        </div>
          </div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="">
                <div class="input-group mb-3">
                                        <!-- search bar is implemented which will display the the row containning specific search -->

                    <input type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" name="search" id="" placeholder="Search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="card text-dark">
                <div class="card-header">
                <h4 class="text-center">Buried in Bradford</h4><br>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover">
					<thead>
					<tr>
                                                <!-- form to display Record from the table -->

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
					<tbody>
                        <?php
                           // connecting to the database

                        if(isset($_GET['search'])){
                            
                        $connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
                        $filtervalue = $_GET['search'];
                        $filterdata = "select * from bf_rollofhonour where concat(id,gender,surname,forename,address,elec_ward,town,rank,reg,unit,company,other_reg,other_unit,other_com,bm1,bm2,certificates,men1,men2,fm1,fm2,enlist_date,discharge_date,death_ser_date,misc_norh_info,age,ser_no,other_ser_no,cem_mem,cem_mem_ref,cem_mem_country,add_cwcg_ifo,occupation,rej_dis,death_unknown,kia,dgas_poision,dcapt,dship_sank,daccident,dwounds,dillness,ser_athome,ser_athome_ill,ser_athome_unfit,western_front,balkans,dard_gall,egy_pal,meso,salonika,east_africa,italy,malta,isle_man,ireland,india,russia,persia,occ_turkey,occ_germany,wds1,wds2,wds3,gds,limb,speech,shell_shock,sship_sank,dishell_shock,diswound,disgassed,disill,disphyunfit,dismedunfit,unfit_overseas,over_under_age,son_claim,captured) like '%$filtervalue%'";                        
						$filterdata_run = mysqli_query($connection,$filterdata);
                        
                        if(mysqli_num_rows($filterdata_run) > 0){
                            foreach($filterdata_run as $row){
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
                                 
                            </tr> 
                            <?php
                            }
                        }
                        else{
                            ?>
                                <tr>
                                    <td colspan="4">No Records Found</td>
                                </tr>
                            <?php
                        }
                    }
                        ?>
                    </tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
