<?php
//1.location of phpmyadmnin login
		//2. connect to database
		//3. query to delete data in the table
		//4. to run the query 
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"bradford");
	$query = "delete from bf_np_ref where nr_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Record Deleted successfully...");
	window.location.href = "newspaper.php";
</script>