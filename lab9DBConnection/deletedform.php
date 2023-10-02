<?php
    include('connect.php');
?>
<?php
//prepare to delete
    // $stml = $pdo->prepare("DELETE FROM product WHERE pid=?");
    // $stml->bindParam(1,$_GET["pid"]);
    // if($stml->execute()){
    //     header("location:workshop5.php");
    // }
    $stml = $pdo->prepare("DELETE FROM member WHERE username=?");
    $stml->bindParam(1,$_GET["username"]);
    if($stml->execute()){
        header("location:workshop6.php");
    }
?>