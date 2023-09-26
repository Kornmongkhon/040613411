<?php 
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stml->bindParam(1,$_GET["username"]);
        $stml->execute();
        $row = $stml->fetch();
    ?>
    <div style="display:flex">
        <div>
            <img src="member_photo/<?=$row["username"]?>.jpg" width='200'>
        </div>
        <div style="padding:15px">
            <h2>สมาชิก <?=$row["username"]?></h2>
            ชื่อสมาชิก : <?=$row['name']?><br>
            ที่อยู่ : <?=$row['address']?><br>
            อีเมล์ <?=$row['email']?>
        </div>
    </div>
</body>
</html>