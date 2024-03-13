
<!--  these are the functions designed to fetch the number of data or rows inserted in each table -->
<!-- data fetched in this functions.php will be displayed both on admin and user pannel -->

<?php

	function get_bf_memorials(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$memorial_count = 0;
		$query = "select count(*) as memorial_count from bf_memorials";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$memorial_count = $row['memorial_count'];
		}
		return($memorial_count);
	}

	function get_bf_biography_info(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$bioinfo_count = 0;
		$query = "select count(*) as bioinfo_count from bf_biography_info";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$bioinfo_count = $row['bioinfo_count'];
		}
		return($bioinfo_count);
	}

	function get_buried_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$buried_count = 0;
		$query = "select count(*) as buried_count from bf_buried";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$buried_count = $row['buried_count'];
		}
		return($buried_count);
	}

	function get_npref_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$npref_count = 0;
		$query = "select count(*) as npref_count from bf_np_ref";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$npref_count = $row['npref_count'];
		}
		return($npref_count);
	}

	function get_user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$user_count = 0;
		$query = "select count(*) as user_count from users";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}
	function get_warroll(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"bradford");
		$user_count = 0;
		$query = "select count(*) as user_count from bf_rollofhonour";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}
?>