<?php

$a = array("INT219"=>"Front end web","INT220"=>"PHP","INT221"=>"Laravel");
$b = array("INT222"=>"Node js", "CSE316"=>"Opearting System","INT221"=>"Laravel");

print_r($a+$b);
echo "<br>";
print_r(array_merge($a,$b));
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a!=$b);
echo "<br>";
var_dump($a<>$b);

?>