<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userss/formdata" action="POST">
    @csrf
        <input type="text" name="username" placeholder="UserName">
         <input type="text" name="password" placeholder="Password">
        <input type="submit" value="submit">
    </form>
</body>
</html>
