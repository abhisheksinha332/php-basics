<?php

$courses = array('PHP','Laravel','Node js');
echo "I like ".$courses[0] ." and ",$courses[1];
echo "<br/>";
print_r($courses);
echo "<br/>";
var_dump($courses);
echo "<br/>";

for($i = 0; $i<count($courses); $i++){
    echo $courses[$i]."<br/>";
   
}
echo count($courses);
echo "<br/>";

foreach ($courses as $course){
    echo $course."<br/>";
}

?>