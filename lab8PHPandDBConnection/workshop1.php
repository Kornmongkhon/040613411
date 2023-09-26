<?php 
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop1</title>
</head>
<body>
    <!-- <?php //normal
        $stml = $pdo->prepare("SELECT * FROM product");
        $stml->execute();
        while($row = $stml->fetch()){
    
            echo "รหัสสินค้า : ".$row["pid"]."<br>";
            echo "ชื่อสินค้า : ".$row["pname"]."<br>";
            echo "รายละเอียดสินค้า : ".$row["pdetail"]."<br>";
            echo "ราคา : ".$row["price"]."<br>";
            echo "<hr>\n";
        }
    ?> -->
    <!-- <?php //ย่อ 1
        $stml = $pdo->prepare("SELECT * FROM product");
        $stml->execute();
        while($row = $stml->fetch()){
    ?>
        รหัสสินค้า : <?=$row["pid"]?><br>
        ชื่อสินค้า : <?=$row["pname"]?><br>
        รายละเอียดสินค้า : <?=$row["pdetail"]?><br>
        ราคา : <?=$row["price"]?><br><hr>
    <?php }?> -->
    <!-- <?php //ย่อ 2
        $stml = $pdo->prepare("SELECT * FROM product");
        $stml->execute();
        while($row = $stml->fetch()):
    ?>
        รหัสสินค้า : <?=$row["pid"]?><br>
        ชื่อสินค้า : <?=$row["pname"]?><br>
        รายละเอียดสินค้า : <?=$row["pdetail"]?><br>
        ราคา : <?=$row["price"]?><br><hr>
    <?php endwhile;?> -->
    
    <table border='1'>
        <tr>
            <th>รหัสสินค้า : </th>
            <th>ชื่อสินค้า : </th>
            <th>รายละเอียดสินค้า : </th>
            <th>ราคา : </th>
            
        </tr>
    <?php 
        $stml = $pdo->prepare("SELECT * FROM product");
        $stml->execute();
        while($row = $stml->fetch()){
    ?>
        <tr>    
            <td><?=$row["pid"]?></td>
            <td><?=$row["pname"]?></td>
            <td><?=$row["pdetail"]?></td>
            <td><?=$row["price"]?> บาท</td>
        </tr>
    <?php }?>
    </table>
</body>
</html>