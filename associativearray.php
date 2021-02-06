<?php

$courses = array("INT220"=>"PHP","INT221"=>"Laravel","INT222"=>"Node js");
echo "INT 220 is ".$courses["INT220"]."<br/>";
echo "INT 221 is ".$courses["INT221"]."<br/>";
echo "INT 222 is ".$courses["INT222"]."<br/>";
print_r($courses);

?>

<?php
 $courses = array("INT220"=>"PHP","INT221"=>"Laravel","INT222"=>"Node js");

foreach($courses as $key => $course){
   
    echo "key= ".$key." "."course= ".$course."<br/>";
}

?>

<?php

$courses = array("INT220"=>"PHP","INT221"=>"Laravel","INT222"=>"Node js");
$key = array_keys($courses);
$values = array_values($courses);

for($i=0; $i<count($key); $i++){
    echo "key= ".$key[$i]." "."Course= ".$values[$i]."<br/>";
}

?>