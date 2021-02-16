<?php

$courses = array("a"=>"PHP","b"=>"HTML","c"=>"MVC","d"=>"CSS","e"=>"Laravel");
$courses1 = array("HTML", "React","MVC");
$courses2 = array("CSS");

print_r(array_diff($courses,$courses1,$courses2));

?>