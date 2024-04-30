<?php
include('../../connect.php');
$nr_id=$_POST['nr_id'];
$name=$_POST['name'];
$rank=$_POST['rank'];
$age=$_POST['age'];
$address=$_POST['address'];
$regiment=$_POST['regiment'];
$comment_catagory=$_POST['comment_catagory'];
$comment_data=$_POST['comment_data'];
$comment_date=$_POST['comment_date'];
$newspaper_name=$_POST['newspaper_name'];
$paper_date=$_POST['paper_date'];
$page_col=$_POST['page_col'];


$N = count($nr_id);
for($i=0; $i < $N; $i++)
{
	$result = "UPDATE bf_np_ref SET nr_id='$nr_id[$i]', name='$name[$i]', rank='$rank[$i]' ,age='$age[$i]' , address='$address[$i]' , regiment='$regiment[$i]' , comment_catagory='$comment_catagory[$i]' , comment_data='$comment_data[$i]' , comment_date='$comment_date[$i]' , newspaper_name='$newspaper_name[$i]' , paper_date='$paper_date[$i]', page_col='$page_col[$i]'  where nr_id='$nr_id[$i]'";
	$query_run = mysqli_query($connection,$result);
}
header("location: ../view/newspaper.php");
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