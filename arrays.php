<?php

$result = array(
    array('Manoj',6.7,'pass'),
    array("Shalini",9.8,'pass'),
    array('Mani',3.2,'fail')
);
echo $result[0][0]. 'CGPA is' . $result[0][1] . 'and his status is '. $result[0][2].'<br/>';
echo $result[1][0]. 'CGPA is' . $result[1][1] . 'and his status is '. $result[1][2].'<br/>';
echo $result[2][0]. 'CGPA is' . $result[2][1] . 'and his status is '. $result[2][2].'<br/>';


?>

<?php
$result = array(
    array('Manoj',6.7,'pass'),
    array("Shalini",9.8,'pass'),
    array('Mani',3.2,'fail')
);

for($i=0; $i<count($result); $i++){
    for($j=0; $j<3; $j++){
        echo $result[$i][$j]. '--CGPA is ' . $result[$i][++$j] . ' and his status is '. $result[$i][++$j].'<br/>';
    }

}


?>

<?php
$result = array(
    array('Manoj',6.7,'pass'),
    array("Shalini",9.8,'pass'),
    array('Mani',3.2,'fail')
);
for($i=0; $i<count($result); $i++){
    for($j=0; $j<count($result); $j++){
        echo $result[$i][$j]. '--CGPA is ' . $result[$i][$j] . ' and his status is '. $result[$i][$j].'<br/>';
    }

}
?>

<?php
$result = array(
    array('Manoj',6.7,'pass'),
    array("Shalini",9.8,'pass'),
    array('Mani',3.2,'fail')
);

foreach($result as $res){
   foreach($res as $x){
       echo  " $x "."<br/>";
   }
   echo "<br/>";
}
?>


<?php
$result = array(
    array('Manoj',6.7,'pass'),
    array("Shalini",9.8,'pass'),
    array('Mani',3.2,'fail')
);

for($i=0; $i<count($result); $i++){
   foreach($result[$i] as $x){
       echo  " $x "."<br/>";
   }
   echo "<br/>";
}
?>


<?php

$books = array(
    "C++"=>array("name"=>"Beginning with C++", "copies"=>8),
    "PHP"=>array("name"=>"Basics of PHP", "copies"=>10),
    "Laravel"=>array("name"=>"MVC","copies"=>4)
);
foreach($books as $book){
    
    foreach($book as $b){
        echo $b."<br/>";
    }
    echo "<br/>";
}


?>