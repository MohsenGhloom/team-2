<?php
include('../../connect.php');
$bioinfo_id=$_POST['bioinfo_id'];
$surname=$_POST['surname'];
$forename=$_POST['forename'];
$regiment=$_POST['regiment'];
$service_no=$_POST['service_no'];

foreach($bioinfo_id as $key => $pname){
$pname  = rand(1000, 10000)."-".$_FILES["file"]["name"];
$tname = $_FILES["file"]["tmp_name"];
$uploads_dir = '../../uploads';
move_uploaded_file($tname, $uploads_dir.'/'.$pname);
}
//  $result = "UPDATE bf_biography_info SET biography='$pname'  where bioinfo_id='1'";
//  $query_run = mysqli_query($connection,$result);


$N = count($bioinfo_id);
for($i=0; $i < $N; $i++)
{
	
 	$result = "UPDATE bf_biography_info SET bioinfo_id='$bioinfo_id[$i]', surname='$surname[$i]', forename='$forename[$i]', regiment='$regiment[$i]', service_no='$service_no[$i]', biography='$pname'  where bioinfo_id='$bioinfo_id[$i]'";
	$query_run = mysqli_query($connection,$result);
}
header("location: ../view/biography.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>	
</body>
</html>