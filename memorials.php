<?php 
// attaching all the php files
   
session_start();
include("../../usercon.php");      //checking user logged in connections
include("../../connect.php");       //checking the database connections
include("../header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bradford Memorials</title>

     <!-- STYLE -->
     <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function alertMsg(){
  			alert("Record added successfully...");
  			window.location.href = "user_dashboard.php";
  		}
    </script>

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

        <!-- navbar two -->
        <div class="navheader">
            <div class="navcontainer">
                <div class="logo">
                    <a href="../user_dashboard.php"><img src="../../images/BradfordWW1_logo7-300x136.png" alt="" width="200px"></a>
                </div>
                <div class="navmain">
                    <a style="text-decoration:none; color:inherit;" href="../user_dashboard.php">Home</a>
                    <a style="text-decoration:none; color:inherit;" href="memorials.php?search=">Memorials</a>
                    <a style="text-decoration:none; color:inherit;" href="buried.php?search=">Buried</a>
                    <a style="text-decoration:none; color:inherit;" href="biography.php?search=">Biography</a>
                    <a style="text-decoration:none; color:inherit;" href="newspaper.php?search=">Newspaper Ref</a>
                    <a style="text-decoration:none; color:inherit;" href="warroll.php?search=">War Rolls</a>
                 
               </div>
            </div>
        </div>
    </div>


    <div class="container">
<br>
<br>
<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	<div class="row mb-2">
                <div class="col-md-12">
                    <h4 class="text-center">Records of Bradford Memorials</h4>
					
                </div>  
				<hr>
    </div>

		<!-- option navbar -->
		<div class="row justify-content-center m-5">
			
			<div class="col-sm-2"><button class="btn border-dark" formaction="../edit/edit_memorials.php">Update</button></div>
			<div class="col-sm-2"><button class="btn border-dark" formaction="../delete/delete_memorials.php">Delete</button></div>		
            	

			
		</div>
		
		

		<!-- navbar ended -->





		<thead>
        <tr>
				<th style="text-align:center;">Surname</th>
				<th style="text-align:center;">Forename</th>
				<th style="text-align:center;">Regiment</th>
				<th style="text-align:center;">Unit</th>
				<th style="text-align:center;">Memorial</th>
				<th style="text-align:center;">Memorial Address</th>
				<th style="text-align:center;">Memorial Location</th>
				<th style="text-align:center;">Memorial Post Code</th>
				<th style="text-align:center;">District</th>
				<th style="text-align:center;">Select</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$query="select * from bf_memorials";
		$query_run = mysqli_query($connection,$query) ;
while($row = mysqli_fetch_array($query_run)){
		$id=$row['mem_id'];
		?>
			<tr>
				<td style="text-align:center;"><?php echo $row['surname'] ?></td>
				<td style="text-align:center;"><?php echo $row['forename'] ?></td>
				<td style="text-align:center;"><?php echo $row['regiment'] ?></td>
				<td style="text-align:center;"><?php echo $row['unit'] ?></td>
				<td style="text-align:center;"><?php echo $row['memorial'] ?></td>
				<td style="text-align:center;"><?php echo $row['memorial_address'] ?></td>
				<td style="text-align:center;"><?php echo $row['memorial_location'] ?></td>
				<td style="text-align:center;"><?php echo $row['memorial_post_code'] ?></td>
				<td style="text-align:center;"><?php echo $row['district'] ?></td>

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