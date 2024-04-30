<?php
include("connect.php");
$name = "";
$email = "";
$mobile = "";
$query = "select * from users where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($query_run)){
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
}
?>