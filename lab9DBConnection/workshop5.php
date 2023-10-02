<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop5</title>
    <style>
        .btn input[type="button"]{
           background-color: greenyellow;
           outline: none;
           border: none;
           border-radius: 10px;
           height: 5vh;
           font-size: 20px;
           font-weight: 800;
           width: 20%;
           cursor: pointer;
        }
        .btn input[type="button"]:hover{
            color: white;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div style="display: block;">
        <?php
            $stml = $pdo->prepare("SELECT * FROM member");
            $stml->execute();
        ?>
        <?php while($row = $stml->fetch()) : ?>
            <div>
                <div>สมาชิก : <?=$row['username']?></div>
                <div>ชื่อสมาชิก : <?=$row['name']?></div>
                <div>ที่อยู่ : <?=$row['address']?></div>
                <div>อีเมล์ : <?=$row['email']?></div>
                <div>
                    <img src="member_photo/<?=$row['username']?>.jpg" width='150'>
                </div>
                <div class="btn"><a href="detail.php?username=<?=$row['username']?>"><input type="button" value="See Info"></a></div>
                <hr>
            </div>
        <?php endwhile;?>
    </div>
</body>
</html>