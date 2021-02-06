<form method="POST">
<input type="text" name="arm">
<input type="submit">
</form>

<?php
if($_POST)
{
$arm = $_POST['arm'];
$armstrong = 0;
// $x = $arm;
// while($x != 0)
// {
// $rem = $x % 10;
// $armstrong = $armstrong + $rem*$rem*$rem;
// $x = $x / 10;
// }

for($x= $arm ; $arm>0; $arm=$arm/10){
    $rem = $x % 10;
    $armstrong = $armstrong + $rem*$rem*$rem;

}
$num = $_POST['num'];
$sum = 0;


for($temp = $num; $num > 0; $num = $num / 10){
$rem = $num % 10;
$sum = $sum + ($rem*$rem*$rem);
}



if ($arm == $armstrong)
echo " Armstrong ";
else
echo " not armstrong ";

}
?>