<?php
include('../../connect.php');
$buried_id=$_POST['buried_id'];
$surname=$_POST['surname'];
$forename=$_POST['forename'];
$age=$_POST['age'];
$medals=$_POST['medals'];
$date_of_death=$_POST['date_of_death'];
$rank=$_POST['rank'];
$regiment=$_POST['regiment'];
$unit=$_POST['unit'];
$cemetery=$_POST['cemetery'];
$info=$_POST['info'];

$N = count($buried_id);
for($i=0; $i < $N; $i++)
{
	$result = "UPDATE bf_buried SET buried_id='$buried_id[$i]', surname='$surname[$i]', forename='$forename[$i]' ,age='$age[$i]' , medals='$medals[$i]' , date_of_death='$date_of_death[$i]' , rank='$rank[$i]' , regiment='$regiment[$i]' , unit='$unit[$i]' , cemetery='$cemetery[$i]' , info='$info[$i]'  where buried_id='$buried_id[$i]'";
	$query_run = mysqli_query($connection,$result);
}
header("location: ../view/buried.php");
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