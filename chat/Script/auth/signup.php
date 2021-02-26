<?php

include_once "signup-config.php";
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);


if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){

}
else{
    echo "All input field are required";
}

?>