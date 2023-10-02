<?php 
    session_start();
    include('connect.php');
?>
<?php
if(isset($_POST['regBTN'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $mobile = trim($_POST['mobile']);
    $email = trim($_POST['email']);
    $stmt = $pdo->prepare("INSERT INTO member(username,password,name,address,mobile,email) VALUES(:username,:password,:name,:address,:mobile,:email)");
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":password",$password);
    $stmt->bindParam(":name",$name);
    $stmt->bindParam(":address",$address);
    $stmt->bindParam(":mobile",$mobile);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    if($_FILES['avatar']['tmp_name']){
        $targetDir = './member_photo/'.$username.'.jpg';
        $upload = move_uploaded_file($_FILES["avatar"]["tmp_name"],$targetDir);
    }
    

}
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