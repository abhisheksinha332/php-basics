<?php

include_once "signup-config.php";
$searchTerm = mysqli_real_escape_string($con,$_POST['searchTerm']);
//echo $searchTerm;
$output ="";

$sql = mysqli_query($con, "SELECT * FROM userdata WHERE fname LIKE '%{$searchTerm}%'OR lname LIKE '%{$searchTerm}%' ");
if(mysqli_num_rows($sql)>0){
    include 'data.php';
}
else{
    $output .= 'No user Found';
}

echo $output;
?>