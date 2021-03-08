<?php

$name = $email = $address = $gender = ""; 

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = test($_POST['name']);
        $email = test($_POST['email']);
        $address = test($_POST['address']);
        $gender = test($_POST['gender']);
    }
    function test($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<form method="POST" action="validate1.php">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Address: <textarea name="address" cols="30" rows="10"></textarea><br><br>
Gender: <input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<br><br>
<input type="submit">
</form>


<?php

echo "<h1>The data filled includes the following</h1>";
echo $name."<br>";
echo $email."<br>";
echo $address."<br>";
echo $gender."<br>";


?>