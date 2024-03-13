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

                                <td>Surname</td>
                                <td>Forename</td>
                                <td>Age</td>
								<td>Medals</td>
								<td>Date of Death</td>
								<td>Rank</td>
								<td>Service Number</td>
								<td>Regiment</td>
								<td>Unit</td>
								<td>Cemetry</td>
                                <td>Grave Reference</td>
								<td>Information</td>
                        </tr>
					</thead>
					<tbody>
                        <?php
                        // connecting to the database
                        if(isset($_GET['search'])){
                            
                        $connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"bradford");
                        $filtervalue = $_GET['search'];
                        $filterdata = "select * from bf_buried where concat(surname,forename,age,medals,date_of_death,rank,service_no,regiment,unit,cemetery,grave_ref,info) like '%$filtervalue%'";                        
						$filterdata_run = mysqli_query($connection,$filterdata);
                        
                        if(mysqli_num_rows($filterdata_run) > 0){
                            foreach($filterdata_run as $row){
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
                                    <?php echo $row['age']; ?> 
                                </td> 
                                <td> 
                                    <?php echo $row['medals']; ?> 
                                </td>
                                <td> 
                                    <?php echo $row['date_of_death']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['rank']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['service_no']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['regiment']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['unit']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['cemetery']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['grave_ref']; ?> 
                                </td>
								<td> 
                                    <?php echo $row['info']; ?> 
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
