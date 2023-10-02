<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop4</title>
    <style>
        .inputbox{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <form>
        <div class="inputbox">
            <input type="text" name="search-username">
            <input type="submit" value="Search">
        </div>
    </form>
    <div style="display: block;">
            <?php
                $stml = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
                if(!empty($_GET)){
                    $value = "%".$_GET["search-username"]."%";
                }
                $stml->bindParam(1,$value);
                $stml->execute();
            ?>
            <?php while($row = $stml->fetch()): ?>
                <div style="padding:15px;text-align:center">
                    <div>ชื่อสมาชิก : <?=$row['name']?></div>
                    <div>ที่อยู่ : <?=$row['address']?></div>
                    <div>อีเมล์ : <?=$row['email']?></div>
                    <img src="member_photo/<?=$row['username']?>.jpg" width='200'><br>
                    <hr>
                </div>
            <?php endwhile;?>
    </div>
</body>
</html>