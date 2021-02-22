<?php 
// declare(strict_types=1);
function cse($course, $credits){
    echo "course is => ".$course." and credit is => ".$credits;
    echo "<br>"; 
}

cse("HTML",3);
cse("Laravel",2);
cse("Node js",3);
cse("Capstone",4);
cse("PHP",2);
?>

<?php
function func($a,$b) {
  echo "Hey There !!";
  echo "<br>";
  echo $a+$b;
}

func(2,3);

?>

<?php 

function add(int $a,int $b){
    echo "<br>";
    echo ($a+$b);
    echo "<br>";
}
add(9,5);
add(4,"2 hell0");
?>

<?php

function setStudents($student="Abhishek"){
    echo $student;
    echo "<br>";
}

setStudents("Aryan");
setStudents();
setStudents("Rohit");
setStudents("Shivam");
setStudents();

?>


<?php
function func1($a,$b) {
  
  return ($a+$b);
  echo "<br>";
}

    echo func1(2,3);
    echo "<br>";

?>
<?php
function func2(&$a,&$b) {
  
  return ($a+$b);
}
$a=3;
$b=4;

    echo func2($a,$b);

?>

