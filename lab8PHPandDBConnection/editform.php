<?php
    include('connect.php');
?>
<?php 
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute(); // 3. เริ่มค้นหา
    $row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user info</title>
</head>
<body>
    <form action="editmember.php" method="post">
        <h2>Username : <?=$row['username']?></h2><br>
        <input type="hidden" name="username" value="<?=$row['username']?>">
        Password : <input type="text" name="password" value="<?=$row['password']?>"><br>
        Full Name : <input type="text" name="name" value="<?=$row['name']?>"><br>
        Address : <input type="text" name="address" value="<?=$row['address']?>"><br>
        Phone Number : <input type="text" name="mobile" value="<?=$row['mobile']?>"><br>
        Email : <input type="text" name="email" value="<?=$row['email']?>"><br>
        <input type="submit" value="Edit Info">
    </form>
</body>
</html>