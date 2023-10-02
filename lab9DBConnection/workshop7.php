<?php 
    session_start();
    require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop7</title>
</head>
<body>
    <form action="insert-member.php" method="post" enctype="multipart/form-data">
        Username : <input type="text" name="username"><br>
        Password : <input type="text" name="password"><br>
        Full Name : <input type="text" name="name"><br>
        Address : <input type="text" name="address"><br>
        Phone Number : <input type="text" name="mobile"><br>
        Email : <input type="text" name="email"><br>
        Avatar <input type="file" id="avatar" name="avatar">
        <input type="submit" name="regBTN" value="Register">
    </form>
</body>
</html>