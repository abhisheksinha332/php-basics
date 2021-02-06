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
echo "The addition is ".($num1+$num2). "<br>";
echo "The subtraction is ".($num1-$num2). "<br>";
echo "The division is ".($num1/$num2). "<br>";
echo "The product is ".($num1*$num2). "<br>";
echo "The remainder is ".($num1%$num2);
}
?>