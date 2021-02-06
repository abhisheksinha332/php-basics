<form method="POST">
<input type="text" name="num"><br><br>
<input type="submit"><br><br>
</form>


<?php
$num = $_POST['num'];
$num2 = 1;

while($num2 <= 10)
{
print $num."X".$num2."=".$num*$num2."<br>";
$num2++;
}
?>