<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop6</title>
    <script>
        function confirmDelete(username){
            var ans = confirm("ต้องการลบผู้ใช้ "+username+" หรือไม่ ?");
            if(ans==true){
                document.location = "delete.php?pid="+username;
            }
        }
    </script>
</head>
<body>
    <?php
        $stml = $pdo->prepare("SELECT * FROM member");
        $stml->execute();
    ?>
    <?php while($row = $stml->fetch()) :?>
        <div>สมาชิก : <?=$row['username']?></div>
        <div>ชื่อสมาชิก : <?=$row['name']?></div>
        <div>ที่อยู่ : <?=$row['address']?></div>
        <div>อีเมล์ : <?=$row['email']?></div>
        <img src="member_photo/<?=$row['username']?>.jpg" width='150'><br>
        <!-- <a href="editform.php?username=<?=$row["username"]?>">แก้ไข</a> -->
        <a href="deletedform.php?username=<?=$row["username"]?>" onclick="confirmDelete('<?=$row['username']?>')">ลบข้อมูล</a>
        <hr>
    <?php endwhile;?>
</body>
</html>