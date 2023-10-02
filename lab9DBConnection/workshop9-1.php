<?php
    session_start();
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop9</title>
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
        
        $stml = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stml->bindParam(1,$_GET['username']);
        $stml->execute();
        $row = $stml->fetch();
    ?>
    <form action="editmember.php" method="post" enctype="multipart/form-data">
        สมาชิก : <input type="text" name="username" value="<?=$row['username']?>" readonly></input><br>
        รหัสผ่าน : <input type="text" name="password" value="<?=$row['password']?>"></input><br>
        ชื่อสมาชิก : <input type="text" name="name" value="<?=$row['name']?>"></input><br>
        ที่อยู่ : <input type="text" name="address" value="<?=$row['address']?>"></input><br>
        เบอร์โทรศัพท์ : <input type="text" name="mobile" value="<?=$row['mobile']?>"></input><br>
        อีเมล์ : <input type="text" name="email" value="<?=$row['email']?>"></input><br>
        <img src="member_photo/<?=$row['username']?>.jpg" width='150'><br>
        Avatar <input type="file" id="avatar" name="avatar">
        <button type="submit">ยืนยัน</button>
        <hr>
    </form>
</body>
</html>