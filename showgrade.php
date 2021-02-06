<form method="POST">
<input type="text" name="sub1"><br><br>
<input type="text" name="sub2"><br><br>
<input type="text" name="sub3"><br><br>
<input type="text" name="sub4"><br><br>
<input type="text" name="sub5"><br><br>
<input type="submit"><br><br>
</form>


<?php
if($_POST)
{
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];

$percent = (($sub1+$sub2+$sub3+$sub4+$sub5)/500)*100;
echo "Your Percent is =".$percent."<br/>";

if($percent>80 && $percent<=100){
    print("Grade A");
}
if($percent>60 && $percent<=80){
    print("Grade B");
}
if($percent>40 && $percent<=60){
    print("Grade C");
}
if($percent<40){
    print("Fail");
}





}
?>