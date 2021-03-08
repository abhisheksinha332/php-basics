<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Navbar</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</li>
            <li><a href="#">Product</li>
            <li><a href="#">About</li>
        </ul>
    </nav>

    <form method="post">
    <select name = "day">
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Thurdday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturdat">Saturday</option>
    </select>
    <input type="submit" name="submit" value="send">


    </form>
    <?php
    if(isset($_POST['day']))
    echo "Today is ".htmlspecialchars($_POST['day']);

    ?>
</body>
</html>