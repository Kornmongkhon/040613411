<?php
    session_start();
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop8</title>
    <!-- <script>
        function confirmDelete(username){
            var ans = confirm("ต้องการลบผู้ใช้ "+username+" หรือไม่ ?");
            if(ans==true){
                document.location = "delete.php?pid="+username;
            }
        }
    </script> -->
</head>
<body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM member");
        $stml->execute();
    ?>
    <?php while($row = $stml->fetch()) :?>
        <h2>สมาชิก : <?=$row['username']?></h2>
        <div>รหัสผ่าน : <?=$row['password']?></div>
        <div>ชื่อสมาชิก : <?=$row['name']?></div>
        <div>ที่อยู่ : <?=$row['address']?></div>
        <div>เบอร์โทรศัพท์ : <?=$row['mobile']?></div>
        <div>อีเมล์ : <?=$row['email']?></div>
        <img src="member_photo/<?=$row['username']?>.jpg" width='150'><br>
        <hr>
    <?php endwhile;?>
</body>
</html>