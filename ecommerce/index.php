<?php
// $con = mysqli_connect("localhost","root","","ecommerce")
// or die (mysqli_error($con));

// $select_query = "select Id, Email, Phone from users";
// $select_query_result = mysqli_query($con, $select_query) or die (mysqli_error($con));
// $row = mysqli_fetch_array($select_query_result);
// echo $row[0]."</br>";
// echo $row[1]."</br>";
// echo $row[2]."</br>";
// $row = mysqli_fetch_array($select_query_result);
// echo $row[0]."</br>";
// echo $row[1]."</br>";
// echo $row[2]."</br>";

$con = mysqli_connect("localhost","root","","ecommerce") or die (mysqli_error($con));
$select_query = "select Id, Email, Phone from users";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <?php while ($row = mysqli_fetch_array($select_query_result)) {  ?>
    <div class="row">
        <div class="col-lg-12"><h4>User  </h4></div>
    </div>
    <div class="row">
        <div class="col-xs-2"><h4>ID  </h4></div>
        <div class="col-xs-10"><?php echo $row['Id']; ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2"><h4>Email  </h4></div>
        <div class="col-xs-10"><?php echo $row['Email']; ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2"><h4>Phone  </h4></div>
        <div class="col-xs-10"><?php echo $row['Phone']; ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2"><h4>Product  </h4></div>
        <div class="col-xs-10"><?php echo product_count($con, $row['Id']); ?></div>
    </div>
    <hr/>
    <?php } ?>
    
</div>

<?php

function product_count($con, $user_id){
    $users_product_query = "select id from users_products where user_id = '$user_id'";
    $users_product_result = mysqli_query($con, $users_product_query);
    $number_of_product = mysqli_num_rows($users_product_result);
    return $number_of_product;
}

?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

