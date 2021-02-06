<form method="POST">
<input type="text" name="num1"><br><br>
<input type="text" name="num2"><br><br>
<input type="submit"><br><br>
</form>


<?php
if($_POST)
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$temp = $num1;
$num1 = $num2;
$num2 = $temp;

echo "num1 = ".$num1."<br/>";
echo "num2 = ".$num2."<br/>";


}
?>