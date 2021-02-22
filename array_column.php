<?php

$array= array(
    array('name'=>'Manoj','cgpa'=>7.8,'status'=>'pass'),
    array('name'=>'Abhishek','cgpa'=>8.8,'status'=>'pass'),
    array('name'=>'Akhil','cgpa'=>5.8,'status'=>'fail')
);

print_r(array_column($array,'cgpa','name'));


?>