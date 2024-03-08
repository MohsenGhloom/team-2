<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>bradford</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div class="header">
<div class="container">
  <div class="logo"><a href="#"><img src="images/BradfordWW1_logo7-300x136.png" width="200px" alt=""></a></div>
  <div class="nav">
  	<a  href="index.php">Home</a>
	<a  href="index.php">People Search</a>
	<a href="admin/index.php">Admin Login</a>
    <a href="user_login.php">User Login</a>
  </div>
  <div class="section1">
        <p class="intro">
            SEE THE COMMEMORATIVE <br> CENTENARY EXHIBITION  <br>PANEL PAGES
        </p>
        <a href=""><button class="search" name="Search" value="Search">
            Search
        </button></a>
    </div>
  </div>
</div>






	
	
    <div class="container">
        
  <div class="row">
    <div class="col-6 col-sm-4 p-5"><a href="view_memorials.php">Names recorded on Bradford Memorials</a></div>
    <div class="col-6 col-sm-4 p-5"><a href="view_biography.php">Biography information</a></div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
   

    <div class="col-6 col-sm-4 p-5"><a href="view_buried.php">Names of those buried in Bradford</a></div>
    <div class="col-6 col-sm-4 p-5"><a href="">Great War Roll of Honour</a></div>
    <div class="col-6 col-sm-4 p-5"><a href="view_newspaper.php">Newspaper references</a></div>
  </div>
</div>
</div>
</body>
</html>
