<?php
include("connect.php");
session_start();
?>

<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 10px;
        }
        .table-custom{
           
            margin: 5rem 0;
        }
    </style>
</head>

<body>
    <h1>สวัสดี <?= $_SESSION["fullname"] ?></h1>
    <div class="table-custom">
        <?php if (!isset($_SESSION['admin'])) : ?>
            <?php
            $stmt = $pdo->prepare("SELECT orders.ord_date, orders.ord_id, product.pname, item.quantity, product.price FROM orders JOIN item ON orders.ord_id = item.ord_id JOIN member ON orders.username = member.username JOIN product ON item.pid = product.pid WHERE member.username = ? ORDER BY orders.ord_id ASC;");
            $stmt->bindParam(1, $_SESSION['username']);
            $stmt->execute();

            $numberorder = null;
            
            ?>
            <table style="width: 50rem;text-align: center;">
                <thead>
                    <tr>
                        <th>วันที่สั่งซื้อ</th>
                        <th>เลขคำสั่งซื้อ</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวน</th>
                        <th>ราคารวม</th>
                    </tr>
                </thead>
                <tbody>
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <tr>
                                <?php if($row["ord_id"] != $numberorder):?>
                                <td><?= $row['ord_date'] ?></td>
                                <td><?= $row['ord_id'] ?></td>
                                <td><?= $row['pname'] ?></td>
                                <td><?= $row['quantity'] ?></td>
                                <td><?=number_format($row['price'],2)?> ฿</td>
                                <?php endif;?>
                            </tr>
                        <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <?php
            $stmt = $pdo->prepare("SELECT member.username , count(orders.ord_id) total_order from member LEFT JOIN orders on member.username = orders.username WHERE urole = 'member' GROUP BY member.username;");
            $stmt->execute();
            ?>
            <div style='margin-top:30px;'><a href='product-list.php'>ดูหน้าสินค้าคงเหลือ</a></div>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <div style='margin-top:20px;'>
                <div>username : <?=$row["username"]?> </div>
                <div style='display:flex;'>
                    <div>จำนวนออเดอร์ : <?=$row["total_order"]?> </div>
                    <a style='margin-left:20px;' href="order-detail.php?username=<?=$row['username']?>">ดูรายละเอียดออเดอร์</a>
                </div>
            </div>
            <?php endwhile;?>
        <?php endif; ?>
    </div>
    หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a>
</body>

</html>