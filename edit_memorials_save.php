<?php
include('../../connect.php');
$mem_id=$_POST['mem_id'];
$surname=$_POST['surname'];
$forename=$_POST['forename'];
$regiment=$_POST['regiment'];
$unit=$_POST['unit'];
$memorial=$_POST['memorial'];
$memorial_address=$_POST['memorial_address'];
$memorial_location=$_POST['memorial_location'];
$memorial_post_code=$_POST['memorial_post_code'];
$district=$_POST['district'];
$N = count($mem_id);
for($i=0; $i < $N; $i++)
{
	$result = "UPDATE bf_memorials SET mem_id='$mem_id[$i]', surname='$surname[$i]', forename='$forename[$i]' ,regiment='$regiment[$i]' , unit='$unit[$i]' , memorial='$memorial[$i]' , memorial_address='$memorial_address[$i]' , memorial_location='$memorial_location[$i]' , memorial_post_code='$memorial_post_code[$i]' , district='$district[$i]'  where mem_id='$mem_id[$i]'";
	$query_run = mysqli_query($connection,$result);
}
header("location: ../view/memorials.php");
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