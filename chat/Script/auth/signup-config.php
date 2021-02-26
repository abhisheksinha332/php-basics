<?php

$con = mysqli_connect("localhost","root","","chat-app");

echo $con ?   "Database Connectd" : mysqli_connect_error();

?>