<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop2</title>
</head>
<body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM member");
        $stml->execute();
        while($row = $stml->fetch()){
    ?>
        <div>ชื่อสมาชิก : <?=$row['name']?></div>
        <div>ที่อยู่ : <?=$row['address']?></div>
        <div>อีเมล์ : <?=$row['email']?></div><hr>
    <?php }?>
</body>
</html>