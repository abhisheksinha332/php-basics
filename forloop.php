<form method="POST">
<input type="text" name="row">

<input type="submit">
</form>

<?php
if($_POST)
{
$row = $_POST['row'];


for($i=0; $i<=$row; $i++){
    for($j=0; $j<$i; $j++){
        print "*";
    }
    echo "<br/>";
} 

echo "<br/> ";

for($i=$row; $i>0; $i--){
    for($j=$i; $j>0; $j--){
        print "*";
    }
    echo "<br/>";
} 


}
?>
