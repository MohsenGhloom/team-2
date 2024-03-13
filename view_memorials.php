<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biography Information</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main. css">
  <link rel="stylesheet" href="css/nav.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  	
  	</script>
</head>
<body>
<div class="navheader">
<div class="navcontainer">
<div class="logo"><a href="#"><img src="images/BradfordWW1_logo7-300x136.png" width="200px" alt=""></a></div>
  <div class="navmain">
    <a href="people_search.php">Home</a>
    <a href="view_memorials.php">Memorial</a>
    <a href="view_buried.php">Buried</a>
    <a href="view_warroll.php">War Roll</a>
    <a href="view_biography.php">Biography</a></a>
    <a href="view_newspaper.php">Newspaper Ref</a>
  </div>
</div>
  </div>
	
  <div class="container mt-2">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
			
			<h4 class="text-center">Names recordes on Bradford Memorials</h4><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
                                    <!-- table displaying for outsider -->

								
                                <td>Surname</td>
                                <td>Forename</td>
                                <td>Regiment</td>
                                <td>Unit</td>
                                <td>Memorial</td>
                                <td>Memorial Address</td>
                                <td>Memorial Location</td>
                                <td>Memorial Post Code</td>
                                <td>District</td>                              

                        </tr>
					</thead>
					<?php
                    // database connectivity
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
						$query = "select * from bf_memorials";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
													<!-- fetching details from database -->

							<td> 
                                    <?php echo $row['surname']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['forename']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['regiment']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['unit']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['memorial']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['memorial_address']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['memorial_location']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['memorial_post_code']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['district']; ?> 
                            </td>
								
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>