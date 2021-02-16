<?php

$courses = array("a"=>"PHP","b"=>"HTML","c"=>"MVC","d"=>"CSS","e"=>"Laravel");
$courses1 = array("HTML", "React","MVC","PHP");
$courses2 = array("c"=>"CSS","d"=>"PHP");

print_r(array_intersect($courses1,$courses2,$courses));

?>