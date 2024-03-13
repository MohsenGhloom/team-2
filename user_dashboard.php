<?php
// using functions
require("logged_user_fuctions.php");

	session_start();
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bradford</title>
      <!--  links of styling are added here in head tag -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap" rel="stylesheet">

</head>
<body>
  <!-- user logged in -->

    <div class="navheader">
        <div class="navcontainer">
          <div class="logo"><a href="admin_dashboard.php"><img src="images/BradfordWW1_logo7-300x136.png" width="200px" alt=""></a></div>
          <div class="navmain">
          <a href="#" style="text-decoration:none"><font style="color: #731332; margin-right=40px;"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font></a>

          <a href="#" style="text-decoration:none"><font style="color: #731332"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font></a>
            <a  href="#" style="text-decoration: none; color:#731332">  </a>
            <a href="#" style="text-decoration: none; color:#731332"></a>
            <a href="logout.php" style="text-decoration: none; color:#731332">Logout</a>
          </div>
        </div>
          </div>



<div class="row row-cols-1 row-cols-md-3 g-4 text-dark">
  <div class="col">
    <div class="card h-100">
      <img src="images/v1_3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bradford Memorials</h5>
        <p class="card-text">No. of records: <?php echo get_bf_memorials();?> </p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a class="btn btn-danger" href="user_memorials.php?search=" target="_blank">View Memorials</a> </small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/v2_19.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Those who Buried in Bradford</h5>
        <p class="card-text">No. of records: <?php echo get_buried_count();?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">	<a class="btn btn-danger" href="user_buried.php?search=" target="_blank">View Buried in Bradford</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/v_22.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Biography information</h5>
        <p class="card-text">No. of records: <?php echo get_bf_biography_info();?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a class="btn btn-danger" href="user_biography.php?search=" target="_blank">View Biography information</a>    </small>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 text-dark">
  <div class="col">
    <div class="card h-100">
      <img src="images/v2_21.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Roll of Honor</h5>
        <p class="card-text">No. of records: <?php echo get_warroll();?> </p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a class="btn btn-danger" href="user_warroll.php?search=" target="_blank">View Roll of Honor</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/v2_20.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Newspaper Reference</h5>
        <p class="card-text">No. of records: <?php echo get_npref_count();?> </p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a class="btn btn-danger" href="user_newspaper.php?search=" target="_blank">View References</a></small>
      </div>
    </div>
  </div>
  
  
  
  </div>


</div>
</div>
</body>
</html>