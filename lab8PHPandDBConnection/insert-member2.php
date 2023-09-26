<?php 
    include('connect.php');
?>
<?php
    $stml = $pdo->prepare("INSERT INTO member VALUES(?,?,?,?,?,?)");
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $mobile = trim($_POST['mobile']);
    $email = trim($_POST['email']);
    $stml->bindParam(1,$username);
    $stml->bindParam(2,$password);
    $stml->bindParam(3,$name);
    $stml->bindParam(4,$address);
    $stml->bindParam(5,$mobile);
    $stml->bindParam(6,$email);
    $stml->execute(); //start insert
    

    // $pid = $pdo->lastInsertId(); // request key success
    header("location:detail.php?username=".$username);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    เพิ่มข้อมูลสมาชิกสำเร็จ สมาชิกล่าสุด คือ <?=$username?>
</body>
</html>